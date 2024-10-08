<?php

namespace WpService\Contracts;

interface RegisterBlockCoreCommentReplyLink
{
    /**
 * Registers the `core/comment-reply-link` block on the server.
 *
 * @since 6.0.0
 */
    public function registerBlockCoreCommentReplyLink(): void;
}
