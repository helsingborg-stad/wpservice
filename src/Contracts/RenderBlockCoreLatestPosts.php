<?php

namespace WpService\Contracts;

interface RenderBlockCoreLatestPosts
{
/**
 * Renders the `core/latest-posts` block on server.
 *
 * @since 5.0.0
 *
 * @global WP_Post $post                                   Global post object.
 * @global int     $block_core_latest_posts_excerpt_length Excerpt length set by the Latest Posts core block.
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the post content with latest posts added.
 */
    public function renderBlockCoreLatestPosts(array $attributes): string;
}
