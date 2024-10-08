<?php

namespace WpService\Contracts;

interface IsPostTypeViewable
{
    /**
     * Determines whether a post type is considered "viewable".
     *
     * For built-in post types such as posts and pages, the 'public' value will be evaluated.
     * For all others, the 'publicly_queryable' value will be used.
     *
     * @since 4.4.0
     * @since 4.5.0 Added the ability to pass a post type name in addition to object.
     * @since 4.6.0 Converted the `$post_type` parameter to accept a `WP_Post_Type` object.
     * @since 5.9.0 Added `is_post_type_viewable` hook to filter the result.
     *
     * @param string|\WP_Post_Type $postType Post type name or object.
     * @return bool Whether the post type should be considered viewable.
     */
    public function isPostTypeViewable(string|\WP_Post_Type $postType): bool;
}
