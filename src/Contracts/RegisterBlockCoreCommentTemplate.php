<?php

namespace WpService\Contracts;

interface RegisterBlockCoreCommentTemplate
{
    /**
 * Registers the `core/comment-template` block on the server.
 *
 * @since 6.0.0
 */
    public function registerBlockCoreCommentTemplate(): void;
}
