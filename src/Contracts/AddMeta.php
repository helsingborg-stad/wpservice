<?php

namespace WpService\Contracts;

interface AddMeta
{
    /**
 * Adds post meta data defined in the `$_POST` superglobal for a post with given ID.
 *
 * @since 1.2.0
 *
 * @param int $postId
 * @return int|bool
 */
    public function addMeta(int $postId): int|bool;
}
