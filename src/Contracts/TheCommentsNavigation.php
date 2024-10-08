<?php

namespace WpService\Contracts;

interface TheCommentsNavigation
{
    /**
 * Displays navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 *
 * @param array $args See get_the_comments_navigation() for available arguments. Default empty array.
 */
    public function theCommentsNavigation(array $args = []): void;
}
