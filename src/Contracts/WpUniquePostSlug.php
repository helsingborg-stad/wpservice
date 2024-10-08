<?php

namespace WpService\Contracts;

interface WpUniquePostSlug
{
    /**
     * Computes a unique slug for the post, when given the desired slug and some post details.
     *
     * @since 2.8.0
     *
     * @global wpdb       $wpdb       WordPress database abstraction object.
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @param string $slug        The desired slug (post_name).
     * @param int $postId     Post ID.
     * @param string $postStatus No uniqueness checks are made if the post is still draft or pending.
     * @param string $postType   Post type.
     * @param int $postParent Post parent ID.
     * @return string Unique slug for the post, based on $post_name (with a -1, -2, etc. suffix)
     */
    public function wpUniquePostSlug(string $slug, int $postId, string $postStatus, string $postType, int $postParent): string;
}
