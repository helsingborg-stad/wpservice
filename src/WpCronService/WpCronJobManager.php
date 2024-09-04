<?php

namespace WpCronService;

use Generator;
use WpService\Contracts\AddAction;
use WpService\Contracts\ClearScheduledHook;
use WpService\Contracts\GetCronArray;
use WpService\Contracts\NextScheduled;
use WpService\Contracts\ScheduleEvent;
use WpCronService\WpCronJob\WpCronJobInterface;

/**
 * Class WpCronJobManager
 *
 * @package WpService\WpCronService
 */
class WpCronJobManager implements WpCronJobManagerInterface
{
    /**
     * @var WpCronJobInterface[]
     */
    public array $jobs = [];

    /**
     * WpCronJobManager constructor.
     *
     * @param AddAction&NextScheduled&ScheduleEvent&GetCronArray&ClearScheduledHook $wpService
     */
    public function __construct(
        public string $hookPrefix,
        private AddAction&NextScheduled&ScheduleEvent&GetCronArray&ClearScheduledHook $wpService
    ) {
    }

    /**
     * Register a cron job.
     * If the job is already registered but with different schedule or arguments, it will be re-registered.
     * If the job is already registered with the same schedule and arguments, it will not be re-registered.
     *
     * @param WpCronJobInterface $job The cron job to register.
     */
    public function register(WpCronJobInterface $job): void
    {
        $hookName = $this->getPrefixedHookName($job->getHookName());
        $this->wpService->addAction($hookName, $job->getCallback());

        if ($this->jobIsAlreadyRegistered($job)) {
            return;
        }

        $this->delete($hookName);
        $this->wpService->scheduleEvent(time(), $job->getSchedule(), $hookName, $job->getArgs());
    }

    /**
     * @inheritDoc
     */
    public function delete(string|WpCronJobInterface $job): void
    {
        $hookName = $job instanceof WpCronJobInterface ? $job->getHookName() : $job;
        $hookName = $this->getPrefixedHookName($hookName);

        foreach ($this->getAllCronJobs() as $cronJob) {
            if ($cronJob['hookName'] === $hookName) {
                $this->wpService->clearScheduledHook($cronJob['hookName'], $cronJob['args']);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function deleteAll(): void
    {
        foreach ($this->getAllCronJobs() as $cronJob) {
            $this->wpService->clearScheduledHook($cronJob['hookName'], $cronJob['args']);
        }
    }

    /**
     * @inheritDoc
     */
    public function getPrefix(): string
    {
        return $this->hookPrefix;
    }

    /**
     * Check if a job is already registered.
     * Compare the hook name, interval, and arguments.
     *
     * @param WpCronJobInterface $job The job to check.
     */
    private function jobIsAlreadyRegistered(WpCronJobInterface $job): bool
    {
        $hookName = $this->getPrefixedHookName($job->getHookName());

        foreach ($this->getAllCronJobs() as $cronJob) {
            if (
                $cronJob['hookName'] === $hookName &&
                $cronJob['schedule'] === $job->getSchedule() &&
                $cronJob['args'] === $job->getArgs()
            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get all cron jobs.
     *
     * @return Generator<array> [timestamp, hookName, args]
     */
    private function getAllCronJobs(): Generator
    {
        foreach ($this->wpService->getCronArray() as $timestamp => $jobsByHookName) {
            foreach ($jobsByHookName as $hookName => $cronJobsById) {
                if (strpos($hookName, $this->hookPrefix) !== 0) {
                    continue;
                }

                foreach ($cronJobsById as $cronJob) {
                    yield [
                        'timestamp' => $timestamp,
                        'hookName'  => $hookName,
                        'schedule'  => $cronJob['schedule'],
                        'args'      => $cronJob['args']];
                }
            }
        }
    }

    /**
     * Get the prefixed hook name.
     */
    private function getPrefixedHookName(string $hookName): string
    {
        return $this->getPrefix() . $hookName;
    }
}
