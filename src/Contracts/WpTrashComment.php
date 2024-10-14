<?php

namespace WpService\Contracts;

interface WpTrashComment
{
/**
 * Moves a comment to the Trash
 *
 * If Trash is disabled, comment is permanently deleted.
 *
 * @since 2.9.0
 *
 * @param int|\WP_Comment $commentId Comment ID or WP_Comment object.
 * @return bool True on success, false on failure.
 */
    public function wpTrashComment(int|\WP_Comment $commentId): bool;
}
