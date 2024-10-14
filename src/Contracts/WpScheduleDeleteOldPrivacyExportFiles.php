<?php

namespace WpService\Contracts;

interface WpScheduleDeleteOldPrivacyExportFiles
{
/**
 * Schedules a `WP_Cron` job to delete expired export files.
 *
 * @since 4.9.6
 */
    public function wpScheduleDeleteOldPrivacyExportFiles(): void;
}
