<?php

namespace WpService\Contracts;

interface WpCountComments
{
    /**
     * Retrieves the total comment counts for the whole site or a single post.
     *
     * The comment stats are cached and then retrieved, if they already exist in the
     * cache.
     *
     * @see get_comment_count() Which handles fetching the live comment counts.
     *
     * @since 2.5.0
     *
     * @param int $postId Optional. Restrict the comment counts to the given post. Default 0, which indicates that
     *                     comment counts for the whole site will be retrieved.
     * @return \stdClass {
     *     The number of comments keyed by their status.
     *
     * @type int $approved       The number of approved comments.
     * @type int $moderated      The number of comments awaiting moderation (a.k.a. pending).
     * @type int $spam           The number of spam comments.
     * @type int $trash          The number of trashed comments.
     * @type int $post-trashed   The number of comments for posts that are in the trash.
     * @type int $total_comments The total number of non-trashed comments, including spam.
     * @type int $all            The total number of pending or approved comments.
     * }
     */
    public function wpCountComments(int $postId): \stdClass;
}
