<?php

namespace WpService\Contracts;

interface WpPrivacyGeneratePersonalDataExportFile
{
    /**
 * Generate the personal data export file.
 *
 * @since 4.9.6
 *
 * @param int $requestId The export request ID.
 */
    public function wpPrivacyGeneratePersonalDataExportFile(int $requestId): void;
}
