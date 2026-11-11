<?php

namespace WpService\Contracts;

interface IsPostEmbeddable
{
/**
 * Determines whether a post is embeddable.
 *
 * @since 6.8.0
 *
 * @param int|\WP_Post|null $post Optional. Post ID or `WP_Post` object. Defaults to global $post.
 * @return bool Whether the post should be considered embeddable.
 */
    public function isPostEmbeddable(int|\WP_Post|null $post = null): bool;
}
