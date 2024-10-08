<?php

namespace WpService\Contracts;

interface ThePostsPagination
{
    /**
     * Displays a paginated navigation to next/previous set of posts, when applicable.
     *
     * @since 4.1.0
     *
     * @param array $args Optional. See get_the_posts_pagination() for available arguments.
     *                    Default empty array.
     */
    public function thePostsPagination(array $args = []): void;
}
