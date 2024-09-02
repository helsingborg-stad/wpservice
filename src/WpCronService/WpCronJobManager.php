<?php

namespace WpService\WpCronService;

use Generator;
use WpService\Contracts\AddAction;
use WpService\Contracts\ClearScheduledHook;
use WpService\Contracts\GetCronArray;
use WpService\Contracts\NextScheduled;
use WpService\Contracts\ScheduleEvent;
use WpService\WpCronService\WpCronJob\WpCronJobInterface;

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
     * @inheritDoc
     */
    public function upsert(WpCronJobInterface $job): void
    {
        $hookName = $this->getPrefixedHookName($job->getHookName());

        $this->delete($hookName);
        $this->wpService->addAction($hookName, $job->getCallback());
        $this->wpService->scheduleEvent(time(), $job->getInterval(), $hookName, $job->getArgs());
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
                        'interval'  => $cronJob['interval'],
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
        return $this->hookPrefix . $hookName;
    }
}
