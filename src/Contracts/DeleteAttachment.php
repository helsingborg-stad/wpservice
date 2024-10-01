<?php

namespace WpService\Contracts;

interface DeleteAttachment
{
    /**
     * Trashes or deletes an attachment.
     *
     * @see https://developer.wordpress.org/reference/functions/wp_delete_attachment/
     *
     * @param int $postId The attachment ID.
     * @param bool $forceDelete Whether to bypass trash and force deletion.
     */
    public function deleteAttachment(int $postId, bool $forceDelete = false): \WP_Post|false|null;
}
