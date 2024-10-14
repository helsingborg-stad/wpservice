<?php

namespace WpService\Contracts;

interface WpCheckForChangedSlugs
{
/**
 * Checks for changed slugs for published post objects and save the old slug.
 *
 * The function is used when a post object of any type is updated,
 * by comparing the current and previous post objects.
 *
 * If the slug was changed and not already part of the old slugs then it will be
 * added to the post meta field ('_wp_old_slug') for storing old slugs for that
 * post.
 *
 * The most logically usage of this function is redirecting changed post objects, so
 * that those that linked to an changed post will be redirected to the new post.
 *
 * @since 2.1.0
 *
 * @param int $postId     Post ID.
 * @param \WP_Post $post        The post object.
 * @param \WP_Post $postBefore The previous post object.
 */
    public function wpCheckForChangedSlugs(int $postId, \WP_Post $post, \WP_Post $postBefore): void;
}
