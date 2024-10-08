<?php

namespace WpService\Contracts;

interface WpGetReadyCronJobs
{
    /**
     * Retrieves cron jobs ready to be run.
     *
     * Returns the results of _get_cron_array() limited to events ready to be run,
     * ie, with a timestamp in the past.
     *
     * @since 5.1.0
     *
     * @return array[] Array of cron job arrays ready to be run.
     */
    public function wpGetReadyCronJobs(): array;
}
