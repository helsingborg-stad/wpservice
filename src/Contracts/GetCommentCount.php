<?php

namespace WpService\Contracts;

interface GetCommentCount
{
    /**
     * Retrieves the total comment counts for the whole site or a single post.
     *
     * @since 2.0.0
     *
     * @param int $postId Optional. Restrict the comment counts to the given post. Default 0, which indicates that
     *                     comment counts for the whole site will be retrieved.
     * @return int[] {
     *     The number of comments keyed by their status.
     *
     * @type int $approved            The number of approved comments.
     * @type int $awaiting_moderation The number of comments awaiting moderation (a.k.a. pending).
     * @type int $spam                The number of spam comments.
     * @type int $trash               The number of trashed comments.
     * @type int $post-trashed        The number of comments for posts that are in the trash.
     * @type int $total_comments      The total number of non-trashed comments, including spam.
     * @type int $all                 The total number of pending or approved comments.
     * }
     */
    public function getCommentCount(int $postId): array;
}
