<?php

namespace WpService\Contracts;

interface UpdatePostmetaCache
{
/**
 * Updates metadata cache for a list of post IDs.
 *
 * Performs SQL query to retrieve the metadata for the post IDs and updates the
 * metadata cache for the posts. Therefore, the functions, which call this
 * function, do not need to perform SQL queries on their own.
 *
 * @since 2.1.0
 *
 * @param int[] $postIds Array of post IDs.
 * @return array|false An array of metadata on success, false if there is nothing to update.
 */
    public function updatePostmetaCache(array $postIds): array|false;
}
