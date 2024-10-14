<?php

namespace WpService\Contracts;

interface WpSavePostRevisionOnInsert
{
/**
 * Saves revisions for a post after all changes have been made.
 *
 * @since 6.4.0
 *
 * @param int $postId The post id that was inserted.
 * @param \WP_Post $post    The post object that was inserted.
 * @param bool $update  Whether this insert is updating an existing post.
 */
    public function wpSavePostRevisionOnInsert(int $postId, \WP_Post $post, bool $update): void;
}
