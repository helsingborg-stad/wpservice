<?php

namespace WpService\Contracts;

interface GetDeletePostLink
{
    /**
 * Retrieves the delete posts link for post.
 *
 * Can be used within the WordPress loop or outside of it, with any post type.
 *
 * @since 2.9.0
 *
 * @param int|\WP_Post $post         Optional. Post ID or post object. Default is the global `$post`.
 * @param string $deprecated   Not used.
 * @param bool $forceDelete Optional. Whether to bypass Trash and force deletion. Default false.
 * @return string|void The delete post link URL for the given post.
 */
    public function getDeletePostLink(int|\WP_Post $post = 0, string $deprecated = '', bool $forceDelete = false): string;
}
