<?php

namespace WpService\Contracts;

interface WpRobots
{
    /**
 * Displays the robots meta tag as necessary.
 *
 * Gathers robots directives to include for the current context, using the
 * {@see 'wp_robots'} filter. The directives are then sanitized, and the
 * robots meta tag is output if there is at least one relevant directive.
 *
 * @since 5.7.0
 * @since 5.7.1 No longer prevents specific directives to occur together.
 */
    public function wpRobots(): void;
}
