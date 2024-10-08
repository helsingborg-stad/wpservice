<?php

namespace WpService\Contracts;

interface FeedLinksExtra
{
    /**
 * Displays the links to the extra feeds such as category feeds.
 *
 * @since 2.8.0
 *
 * @param array $args Optional arguments.
 */
    public function feedLinksExtra(array $args): void;
}
