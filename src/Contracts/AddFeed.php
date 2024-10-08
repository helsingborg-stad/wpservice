<?php

namespace WpService\Contracts;

interface AddFeed
{
    /**
 * Adds a new feed type like /atom1/.
 *
 * @since 2.1.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $feedname Feed name.
 * @param callable $callback Callback to run on feed display.
 * @return string Feed action name.
 */
    public function addFeed(string $feedname, callable $callback): string;
}
