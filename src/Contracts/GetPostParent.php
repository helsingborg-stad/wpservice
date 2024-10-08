<?php

namespace WpService\Contracts;

interface GetPostParent
{
    /**
     * Retrieves the parent post object for the given post.
     *
     * @since 5.7.0
     *
     * @param int|\WP_Post|null $post Optional. Post ID or WP_Post object. Default is global $post.
     * @return \WP_Post|null Parent post object, or null if there isn't one.
     */
    public function getPostParent(int|\WP_Post|null $post = null): \WP_Post|null;
}
