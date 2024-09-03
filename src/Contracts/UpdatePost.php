<?php

namespace WpService\Contracts;

use WP_Error;
use WP_Post;

interface UpdatePost
{
    /**
     * Updates an existing post with new data.
     *
     * @param array|object $postArray {
     *     Optional. Post data or object. Arrays are expected to be escaped, objects are not.
     *     See wp_insert_post() for accepted arguments.
     *     Default is an empty array.
     *
     *     @type int $ID The post ID.
     *     @type string $post_type The type of post (e.g., 'post', 'page', 'attachment').
     *     @type string $post_title The post title.
     *     @type string $post_content The post content.
     *     @type string $post_excerpt The post excerpt.
     *     @type string $post_status The post status (e.g., 'draft', 'publish').
     *     @type array $post_category The list of categories for the post.
     *     @type array $tags_input The list of tags for the post.
     *     @type bool $edit_date Whether the post date should be edited.
     *     ...and other possible fields from wp_insert_post().
     * }
     * @param bool $WPError Optional. Whether to return a WP_Error on failure. Default is false.
     * @param bool $fireAfterHooks Optional. Whether to fire the after insert hooks. Default is true.
     *
     * @return int|WP_Error|WP_Post The post ID on success, WP_Post object on success
     *                              for attachments, or WP_Error object on failure.
     */
    public function updatePost(
        array|object $postArray = [],
        bool $WPError = false,
        bool $fireAfterHooks = true
    ): int|WP_Error|WP_Post;
}
