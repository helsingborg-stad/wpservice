<?php

namespace WpService\Contracts;

interface WpDeleteAllTempBackups
{
/**
 * Schedules the removal of all contents in the temporary backup directory.
 *
 * @since 6.3.0
 */
    public function wpDeleteAllTempBackups(): void;
}
