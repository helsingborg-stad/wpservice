<?php

namespace WpService\Contracts;

interface GetPostPermalink
{
    /**
 * Retrieves the permalink for a post of a custom post type.
 *
 * @since 3.0.0
 * @since 6.1.0 Returns false if the post does not exist.
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int|\WP_Post $post      Optional. Post ID or post object. Default is the global `$post`.
 * @param bool $leavename Optional. Whether to keep post name. Default false.
 * @param bool $sample    Optional. Is it a sample permalink. Default false.
 * @return string|false The post permalink URL. False if the post does not exist.
 */
    public function getPostPermalink(int|\WP_Post $post = 0, bool $leavename = false, bool $sample = false): string|false;
}
