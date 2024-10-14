<?php

namespace WpService\Contracts;

interface WpUpdateCommentCount
{
/**
 * Updates the comment count for post(s).
 *
 * When $do_deferred is false (is by default) and the comments have been set to
 * be deferred, the post_id will be added to a queue, which will be updated at a
 * later date and only updated once per post ID.
 *
 * If the comments have not be set up to be deferred, then the post will be
 * updated. When $do_deferred is set to true, then all previous deferred post
 * IDs will be updated along with the current $post_id.
 *
 * @since 2.1.0
 *
 * @see wp_update_comment_count_now() For what could cause a false return value
 *
 * @param int|null $postId     Post ID.
 * @param bool $doDeferred Optional. Whether to process previously deferred
 *                              post comment counts. Default false.
 * @return bool|void True on success, false on failure or if post with ID does
 *                   not exist.
 */
    public function wpUpdateCommentCount(int|null $postId, bool $doDeferred = false): mixed;
}
