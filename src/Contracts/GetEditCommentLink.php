<?php

namespace WpService\Contracts;

interface GetEditCommentLink
{
    /**
     * Retrieves the edit comment link.
     *
     * @since 2.3.0
     *
     * @param int|\WP_Comment $commentId Optional. Comment ID or WP_Comment object.
     * @return string|void The edit comment link URL for the given comment.
     */
    public function getEditCommentLink(int|\WP_Comment $commentId): mixed;
}
