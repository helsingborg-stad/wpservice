<?php

namespace WpService\Contracts;

interface GetAttachmentMetadata
{
    /**
     * Retrieves metadata for an attachment.
     *
     * @param int  $attachmentId The attachment ID.
     * @param bool $unfiltered  Optional. If true, filters are not run. Default false.
     *
     * @return array|false The attachment metadata, or false on failure (post does not exist/metadata does not exists).
     */
    public function getAttachmentMetadata(
        int $attachmentId,
        bool $unfiltered = false
    ): array|false;
}
