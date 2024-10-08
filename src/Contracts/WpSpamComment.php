<?php

namespace WpService\Contracts;

interface WpSpamComment
{
    /**
 * Marks a comment as Spam.
 *
 * @since 2.9.0
 *
 * @param int|\WP_Comment $commentId Comment ID or WP_Comment object.
 * @return bool True on success, false on failure.
 */
    public function wpSpamComment(int|\WP_Comment $commentId): bool;
}
