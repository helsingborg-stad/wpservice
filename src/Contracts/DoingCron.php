<?php

namespace WpService\Contracts;

interface DoingCron
{
    /**
     * Determines whether the current request is a WordPress cron request.
     *
     * @see https://developer.wordpress.org/reference/functions/wp_doing_cron/
     *
     * @return bool True if it’s a WordPress cron request, false otherwise.
     */
    public function doingCron(): bool;
}
