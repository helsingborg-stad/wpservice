<?php

namespace WpService\Contracts;

interface ThePostNavigation
{
    /**
     * Displays the navigation to next/previous post, when applicable.
     *
     * @since 4.1.0
     *
     * @param array $args Optional. See get_the_post_navigation() for available arguments.
     *                    Default empty array.
     */
    public function thePostNavigation(array $args = []): void;
}
