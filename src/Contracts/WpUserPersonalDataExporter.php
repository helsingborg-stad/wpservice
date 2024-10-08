<?php

namespace WpService\Contracts;

interface WpUserPersonalDataExporter
{
    /**
 * Finds and exports personal data associated with an email address from the user and user_meta table.
 *
 * @since 4.9.6
 * @since 5.4.0 Added 'Community Events Location' group to the export data.
 * @since 5.4.0 Added 'Session Tokens' group to the export data.
 *
 * @param string $emailAddress  The user's email address.
 * @return array {
 *     An array of personal data.
 *
 *     @type array[] $data An array of personal data arrays.
 *     @type bool    $done Whether the exporter is finished.
 * }
 */
    public function wpUserPersonalDataExporter(string $emailAddress): array;
}
