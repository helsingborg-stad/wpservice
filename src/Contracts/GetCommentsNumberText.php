<?php

namespace WpService\Contracts;

interface GetCommentsNumberText
{
/**
 * Displays the language string for the number of comments the current post has.
 *
 * @since 4.0.0
 * @since 5.4.0 Added the `$post` parameter to allow using the function outside of the loop.
 *
 * @param string $zero Optional. Text for no comments. Default false.
 * @param string $one  Optional. Text for one comment. Default false.
 * @param string $more Optional. Text for more than one comment. Default false.
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is the global `$post`.
 * @return string Language string for the number of comments a post has.
 */
    public function getCommentsNumberText(string|false $zero = false, string|false $one = false, string|false $more = false, int|\WP_Post $post = 0): string;
}
