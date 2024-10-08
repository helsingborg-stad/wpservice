<?php

namespace WpService\Contracts;

interface TheCommentsPagination
{
    /**
 * Displays a paginated navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 *
 * @param array $args See get_the_comments_pagination() for available arguments. Default empty array.
 */
    public function theCommentsPagination(array $args = []): void;
}
