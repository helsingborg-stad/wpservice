<?php

namespace WpService\Contracts;

interface GetEditCommentLink
{
/**
 * Retrieves the edit comment link.
 *
 * @since 2.3.0
 * @since 6.7.0 The $context parameter was added.
 *
 * @param int|\WP_Comment $commentId Optional. Comment ID or WP_Comment object.
 * @param string $context    Optional. Context in which the URL should be used. Either 'display',
 *                                   to include HTML entities, or 'url'. Default 'display'.
 * @return string|void The edit comment link URL for the given comment, or void if the comment id does not exist or
 *                     the current user is not allowed to edit it.
 */
    public function getEditCommentLink(int|\WP_Comment $commentId = 0, string $context = 'display'): mixed;
}
