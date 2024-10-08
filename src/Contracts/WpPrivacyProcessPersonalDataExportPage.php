<?php

namespace WpService\Contracts;

interface WpPrivacyProcessPersonalDataExportPage
{
    /**
     * Intercept personal data exporter page Ajax responses in order to assemble the personal data export file.
     *
     * @since 4.9.6
     *
     * @see 'wp_privacy_personal_data_export_page'
     *
     * @param array $response        The response from the personal data exporter for the given page.
     * @param int $exporterIndex  The index of the personal data exporter. Begins at 1.
     * @param string $emailAddress   The email address of the user whose personal data this is.
     * @param int $page            The page of personal data for this exporter. Begins at 1.
     * @param int $requestId      The request ID for this personal data export.
     * @param bool $sendAsEmail   Whether the final results of the export should be emailed to the user.
     * @param string $exporterKey    The slug (key) of the exporter.
     * @return array The filtered response.
     */
    public function wpPrivacyProcessPersonalDataExportPage(array $response, int $exporterIndex, string $emailAddress, int $page, int $requestId, bool $sendAsEmail, string $exporterKey): array;
}
