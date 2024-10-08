<?php

namespace WpService\Contracts;

interface WpCommentsPersonalDataExporter
{
    /**
     * Finds and exports personal data associated with an email address from the comments table.
     *
     * @since 4.9.6
     *
     * @param string $emailAddress The comment author email address.
     * @param int $page          Comment page number.
     * @return array {
     *     An array of personal data.
     *
     * @type array[] $data An array of personal data arrays.
     * @type bool    $done Whether the exporter is finished.
     * }
     */
    public function wpCommentsPersonalDataExporter(string $emailAddress, int $page = 1): array;
}
