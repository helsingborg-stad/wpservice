<?php

namespace WpService\Contracts;

interface FeedLinks
{
    /**
 * Displays the links to the general feeds.
 *
 * @since 2.8.0
 *
 * @param array $args Optional arguments.
 */
    public function feedLinks(array $args = []): void;
}
