<?php

namespace WpService\Contracts;

interface CancelCommentReplyLink
{
    /**
 * Displays HTML content for cancel comment reply link.
 *
 * @since 2.7.0
 *
 * @param string $linkText Optional. Text to display for cancel reply link. If empty,
 *                     defaults to 'Click here to cancel reply'. Default empty.
 */
    public function cancelCommentReplyLink(string $linkText = ''): void;
}
