<?php

namespace WpService\Contracts;

interface ThePostsNavigation
{
    /**
     * Displays the navigation to next/previous set of posts, when applicable.
     *
     * @since 4.1.0
     *
     * @param array $args Optional. See get_the_posts_navigation() for available arguments.
     *                    Default empty array.
     */
    public function thePostsNavigation(array $args = []): void;
}
