<?php

namespace WpService\Contracts;

interface CommentID
{
    /**
     * Displays the comment ID of the current comment.
     *
     * @since 0.71
     */
    public function commentID(): void;
}
