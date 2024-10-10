<?php

namespace WpService\Contracts;

interface CommentsNumber
{
    /**
     * Displays the language string for the number of comments the current post has.
     *
     * @since 0.71
     * @since 5.4.0 The `$deprecated` parameter was changed to `$post`.
     *
     * @param string|false $zero Optional. Text for no comments. Default false.
     * @param string|false $one  Optional. Text for one comment. Default false.
     * @param string|false $more Optional. Text for more than one comment. Default false.
     * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is the global `$post`.
     */
    public function commentsNumber(string|false $zero = false, string|false $one = false, string|false $more = false, int|\WP_Post $post): void;
}
