<?php

namespace WpService\Contracts;

interface CommentTextRss
{
    /**
     * Displays the current comment content for use in the feeds.
     *
     * @since 1.0.0
     */
    public function commentTextRss(): void;
}
