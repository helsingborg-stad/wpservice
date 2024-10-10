<?php

namespace WpCronService;

use Generator;
use WpCronService\WpCronJob\WpCronJobInterface;
use WpService\WpService;

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
    public array $jobs              = [];
    private static array $cronArray = [];

    /**
     * WpCronJobManager constructor.
     */
    public function __construct(
        public string $hookPrefix,
        private WpService $wpService
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

        $this->delete($job);
        $this->wpService->wpScheduleEvent(time(), $job->getSchedule(), $hookName, $job->getArgs());
    }

    /**
     * @inheritDoc
     */
    public function delete(WpCronJobInterface $job): void
    {
        $hookName = $job instanceof WpCronJobInterface ? $job->getHookName() : $job;
        $hookName = $this->getPrefixedHookName($hookName);

        foreach ($this->getAllCronJobs() as $cronJob) {
            if ($cronJob['hookName'] === $hookName) {
                $this->wpService->wpClearScheduledHook($cronJob['hookName'], $cronJob['args']);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function deleteAll(): void
    {
        foreach ($this->getAllCronJobs() as $cronJob) {
            $this->wpService->wpClearScheduledHook($cronJob['hookName'], $cronJob['args']);
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
        foreach ($this->getCronArray() as $timestamp => $jobsByHookName) {
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
     * Get the cron array.
     *
     * @return array
     */
    private function getCronArray(): array
    {
        $cron = $this->wpService->getOption('cron');

        if (! is_array($cron)) {
            return array();
        }

        if (isset($cron['version'])) {
            unset($cron['version']);
        }

        return $cron;
    }

    /**
     * Get the prefixed hook name.
     */
    private function getPrefixedHookName(string $hookName): string
    {
        return $this->getPrefix() . $hookName;
    }
}
