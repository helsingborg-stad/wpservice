<?php

namespace WpService\Contracts;

interface GetEnclosed
{
    /**
 * Retrieves enclosures already enclosed for a post.
 *
 * @since 1.5.0
 *
 * @param int $postId Post ID.
 * @return string[] Array of enclosures for the given post.
 */
    public function getEnclosed(int $postId): array;
}
