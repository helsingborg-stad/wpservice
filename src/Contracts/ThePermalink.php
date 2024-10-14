<?php

namespace WpService\Contracts;

interface ThePermalink
{
/**
 * Displays the permalink for the current post.
 *
 * @since 1.2.0
 * @since 4.4.0 Added the `$post` parameter.
 *
 * @param int|\WP_Post $post Optional. Post ID or post object. Default is the global `$post`.
 */
    public function thePermalink(int|\WP_Post $post = 0): void;
}
