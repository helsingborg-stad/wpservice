<?php

namespace WpService\Contracts;

interface SeparateComments
{
    /**
     * Separates an array of comments into an array keyed by comment_type.
     *
     * @since 2.7.0
     *
     * @param WP_Comment[] $comments Array of comments
     * @return WP_Comment[] Array of comments keyed by comment_type.
     */
    public function separateComments(array $comments): array;
}
