<?php

namespace WpService\Contracts;

interface RenderBlockCoreLatestPosts
{
/**
 * Renders the `core/latest-posts` block on server.
 *
 * @since 5.0.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the post content with latest posts added.
 */
    public function renderBlockCoreLatestPosts(array $attributes): string;
}
