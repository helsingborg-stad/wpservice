<?php

namespace WpService\Contracts;

interface DeletePostMetaByKey
{
/**
 * Deletes everything from post meta matching the given meta key.
 *
 * @since 2.3.0
 *
 * @param string $postMetaKey Key to search for when deleting.
 * @return bool Whether the post meta key was deleted from the database.
 */
    public function deletePostMetaByKey(string $postMetaKey): bool;
}
