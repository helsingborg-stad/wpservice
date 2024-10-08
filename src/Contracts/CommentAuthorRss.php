<?php

namespace WpService\Contracts;

interface CommentAuthorRss
{
    /**
     * Displays the current comment author in the feed.
     *
     * @since 1.0.0
     */
    public function commentAuthorRss(): void;
}
