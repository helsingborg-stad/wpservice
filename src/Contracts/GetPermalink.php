<?php

namespace WpService\Contracts;

interface GetPermalink
{
/**
 * Retrieves the full permalink for the current post or post ID.
 *
 * @since 1.0.0
 *
 * @param int|\WP_Post $post      Optional. Post ID or post object. Default is the global `$post`.
 * @param bool $leavename Optional. Whether to keep post name or page name. Default false.
 * @return string|false The permalink URL. False if the post does not exist.
 */
    public function getPermalink(int|\WP_Post $post = 0, bool $leavename = false): string|false;
}
