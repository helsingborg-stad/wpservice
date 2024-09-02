<?php

namespace WpService\Contracts;

interface GetReadyCronJobs
{
    /**
     * Retrieve the list of all cron jobs that are ready to be executed.
     *
     * @return array The list of all cron jobs that are ready to be executed.
     */
    public function getReadyCronJobs(): array;
}
