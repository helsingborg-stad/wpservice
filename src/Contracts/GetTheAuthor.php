<?php

namespace WpService\Contracts;

interface GetTheAuthor
{
/**
 * Retrieves the author of the current post.
 *
 * @since 1.5.0
 * @since 6.3.0 Returns an empty string if the author's display name is unknown.
 *
 * @global WP_User $authordata The current author's data.
 *
 * @param string $deprecated Deprecated.
 * @return string The author's display name, empty string if unknown.
 */
    public function getTheAuthor(string $deprecated = ''): string;
}
