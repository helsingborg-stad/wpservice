<?php

namespace WpService\Contracts;

interface CommentsPopupLink
{
    /**
 * Displays the link to the comments for the current post ID.
 *
 * @since 0.71
 *
 * @param false|string $zero      Optional. String to display when no comments. Default false.
 * @param false|string $one       Optional. String to display when only one comment is available. Default false.
 * @param false|string $more      Optional. String to display when there are more than one comment. Default false.
 * @param string $cssClass Optional. CSS class to use for comments. Default empty.
 * @param false|string $none      Optional. String to display when comments have been turned off. Default false.
 */
    public function commentsPopupLink(false|string $zero, false|string $one, false|string $more, string $cssClass, false|string $none): void;
}
