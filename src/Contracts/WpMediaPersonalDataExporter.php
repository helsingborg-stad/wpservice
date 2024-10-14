<?php

namespace WpService\Contracts;

interface WpMediaPersonalDataExporter
{
/**
 * Finds and exports attachments associated with an email address.
 *
 * @since 4.9.6
 *
 * @param string $emailAddress The attachment owner email address.
 * @param int $page          Attachment page number.
 * @return array {
 *     An array of personal data.
 *
 * @type array[] $data An array of personal data arrays.
 * @type bool    $done Whether the exporter is finished.
 * }
 */
    public function wpMediaPersonalDataExporter(string $emailAddress, int $page = 1): array;
}
