<?php

namespace WpService\Contracts;

interface GetCommentGuid
{
    /**
     * Retrieves the feed GUID for the current comment.
     *
     * @since 2.5.0
     *
     * @param int|\WP_Comment $commentId Optional comment object or ID. Defaults to global comment object.
     * @return string|false GUID for comment on success, false on failure.
     */
    public function getCommentGuid(int|\WP_Comment $commentId = null): string|false;
}
