<?php

namespace WpService\Contracts;

interface SetPostThumbnail
{
/**
 * Sets the post thumbnail (featured image) for the given post.
 *
 * @since 3.1.0
 *
 * @param int|\WP_Post $post         Post ID or post object where thumbnail should be attached.
 * @param int $thumbnailId Thumbnail to attach.
 * @return int|bool Post meta ID if the key didn't exist (ie. this is the first time that
 *                  a thumbnail has been saved for the post), true on successful update,
 *                  false on failure or if the value passed is the same as the one that
 *                  is already in the database.
 */
    public function setPostThumbnail(int|\WP_Post $post, int $thumbnailId): int|bool;
}
