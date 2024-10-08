<?php

namespace WpService\Contracts;

interface WpDoingCron
{
    /**
     * Determines whether the current request is a WordPress cron request.
     *
     * @since 4.8.0
     *
     * @return bool True if it's a WordPress cron request, false otherwise.
     */
    public function wpDoingCron(): bool;
}
