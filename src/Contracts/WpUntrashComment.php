<?php

namespace WpService\Contracts;

interface WpUntrashComment
{
    /**
 * Removes a comment from the Trash
 *
 * @since 2.9.0
 *
 * @param int|\WP_Comment $commentId Comment ID or WP_Comment object.
 * @return bool True on success, false on failure.
 */
    public function wpUntrashComment(int|\WP_Comment $commentId): bool;
}
