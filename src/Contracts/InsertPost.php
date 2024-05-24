<?php

namespace WpService\Contracts;

use WP_Error;

interface InsertPost
{
    /**
     * Inserts or update a post.
     * @see https://developer.wordpress.org/reference/functions/wp_insert_post/
     *
     * @param array $postarr         Array of elements that make up a post to insert or update.
     * @param bool  $wp_error         Optional. Whether to return a WP_Error on failure. Default false.
     * @param bool  $fire_after_hooks Optional. Whether to fire the after insert hooks. Default true.
     * @return int|WP_Error The post ID on success. The value 0 or WP_Error on failure.
     */
    public function insertPost($postarr, $wpError = false, $fireAfterHooks = true): int|WP_Error;
}
