<?php

namespace WpService\Contracts;

interface GetCancelCommentReplyLink
{
    /**
 * Retrieves HTML content for cancel comment reply link.
 *
 * @since 2.7.0
 * @since 6.2.0 Added the `$post` parameter.
 *
 * @param string $linkText Optional. Text to display for cancel reply link. If empty,
 *                                    defaults to 'Click here to cancel reply'. Default empty.
 * @param int|\WP_Post|null $post      Optional. The post the comment thread is being
 *                                    displayed for. Defaults to the current global post.
 * @return string
 */
    public function getCancelCommentReplyLink(string $linkText, int|\WP_Post|null $post): string;
}
