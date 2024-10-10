<?php

namespace WpService\Contracts;

interface GetCommentAuthorUrlLink
{
    /**
     * Retrieves the HTML link of the URL of the author of the current comment.
     *
     * $link_text parameter is only used if the URL does not exist for the comment
     * author. If the URL does exist then the URL will be used and the $link_text
     * will be ignored.
     *
     * Encapsulate the HTML link between the $before and $after. So it will appear
     * in the order of $before, link, and finally $after.
     *
     * @since 1.5.0
     * @since 4.6.0 Added the `$comment` parameter.
     *
     * @param string $linkText Optional. The text to display instead of the comment
     *                                  author's email address. Default empty.
     * @param string $before    Optional. The text or HTML to display before the email link.
     *                                  Default empty.
     * @param string $after     Optional. The text or HTML to display after the email link.
     *                                  Default empty.
     * @param int|\WP_Comment $comment   Optional. Comment ID or WP_Comment object.
     *                                  Default is the current comment.
     * @return string The HTML link between the $before and $after parameters.
     */
    public function getCommentAuthorUrlLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment): string;
}
