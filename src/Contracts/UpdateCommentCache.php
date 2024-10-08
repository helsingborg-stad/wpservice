<?php

namespace WpService\Contracts;

interface UpdateCommentCache
{
    /**
 * Updates the comment cache of given comments.
 *
 * Will add the comments in $comments to the cache. If comment ID already exists
 * in the comment cache then it will not be updated. The comment is added to the
 * cache using the comment group with the key using the ID of the comments.
 *
 * @since 2.3.0
 * @since 4.4.0 Introduced the `$update_meta_cache` parameter.
 *
 * @param WP_Comment[] $comments          Array of comment objects
 * @param bool $updateMetaCache Whether to update commentmeta cache. Default true.
 */
    public function updateCommentCache(array $comments, bool $updateMetaCache): void;
}
