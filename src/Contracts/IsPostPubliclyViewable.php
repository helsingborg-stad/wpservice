<?php

namespace WpService\Contracts;

interface IsPostPubliclyViewable
{
    /**
     * Determines whether a post is publicly viewable.
     *
     * Posts are considered publicly viewable if both the post status and post type
     * are viewable.
     *
     * @since 5.7.0
     *
     * @param int|\WP_Post|null $post Optional. Post ID or post object. Defaults to global $post.
     * @return bool Whether the post is publicly viewable.
     */
    public function isPostPubliclyViewable(int|\WP_Post|null $post = null): bool;
}
