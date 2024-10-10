<?php

namespace WpService\Contracts;

interface CommentsLink
{
    /**
     * Displays the link to the current post comments.
     *
     * @since 0.71
     *
     * @param string $deprecated   Not Used.
     * @param string $deprecated2 Not Used.
     */
    public function commentsLink(string $deprecated = '', mixed $deprecated2 = ''): void;
}
