<?php

namespace WpService\Contracts;

interface GetAttachmentUrl
{
    /**
     * Retrieves the URL of an attachment.
     *
     * @param int @attachmentId Attachment post ID. Defaults to global $post.
     *
     * @return string|false Attachment URL, otherwise false.
     */
    public function getAttachmentUrl(int $attachmentId): string|false;
}
