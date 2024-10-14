<?php

namespace WpService\Contracts;

interface DoRobots
{
/**
 * Displays the default robots.txt file content.
 *
 * @since 2.1.0
 * @since 5.3.0 Remove the "Disallow: /" output if search engine visibility is
 *              discouraged in favor of robots meta HTML tag via wp_robots_no_robots()
 *              filter callback.
 */
    public function doRobots(): void;
}
