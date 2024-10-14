<?php

namespace WpService\Contracts;

interface WpPrivacySendPersonalDataExportEmail
{
/**
 * Send an email to the user with a link to the personal data export file
 *
 * @since 4.9.6
 *
 * @param int $requestId The request ID for this personal data export.
 * @return true|\WP_Error True on success or `WP_Error` on failure.
 */
    public function wpPrivacySendPersonalDataExportEmail(int $requestId): true|\WP_Error;
}
