<?php

namespace WpCronService;

use WpCronService\WpCronJob\WpCronJobInterface;

interface WpCronJobManagerInterface
{
    /**
     * Register a cron job.
     *
     * @param WpCronJobInterface $job The cron job to register.
     * @return void
     */
    public function register(WpCronJobInterface $job): void;

    /**
     * Delete a cron job.
     *
     * @param WpCronJobInterface $hook The cron job to delete.
     */
    public function delete(WpCronJobInterface $hook): void;

    /**
     * Delete all cron jobs.
     */
    public function deleteAll(): void;

    /**
     * Get the prefix which is appended to the cron events registered in this service.
     *
     * @return string The prefix.
     */
    public function getPrefix(): string;
}
