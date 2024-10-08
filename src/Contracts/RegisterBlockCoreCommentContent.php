<?php

namespace WpService\Contracts;

interface RegisterBlockCoreCommentContent
{
    /**
 * Registers the `core/comment-content` block on the server.
 *
 * @since 6.0.0
 */
    public function registerBlockCoreCommentContent(): void;
}
