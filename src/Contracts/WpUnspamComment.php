<?php

namespace WpService\Contracts;

interface WpUnspamComment
{
    /**
 * Removes a comment from the Spam.
 *
 * @since 2.9.0
 *
 * @param int|\WP_Comment $commentId Comment ID or WP_Comment object.
 * @return bool True on success, false on failure.
 */
    public function wpUnspamComment(int|\WP_Comment $commentId): bool;
}
