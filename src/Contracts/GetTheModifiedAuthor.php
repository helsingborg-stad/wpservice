<?php

namespace WpService\Contracts;

interface GetTheModifiedAuthor
{
/**
 * Retrieves the author who last edited the current post.
 *
 * @since 2.8.0
 * @since 6.9.0 Added the `$post` parameter. Unknown return value is now explicitly null instead of void.
 *
 * @param int|\WP_Post|null $post Optional. Post ID or post object. Default is global `$post` object.
 * @return string|null The author's display name. Empty string if user is unavailable. Null if there was no last editor or the post is invalid.
 */
    public function getTheModifiedAuthor(int|\WP_Post|null $post = null): string|null;
}
