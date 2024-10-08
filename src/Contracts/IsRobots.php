<?php

namespace WpService\Contracts;

interface IsRobots
{
    /**
 * Is the query for the robots.txt file?
 *
 * @since 2.1.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for the robots.txt file.
 */
    public function isRobots(): bool;
}
