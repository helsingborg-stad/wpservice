<?php

namespace WpService\Contracts;

interface WpCheckPhpMysqlVersions
{
    /**
 * Checks for the required PHP version, and the mysqli extension or
 * a database drop-in.
 *
 * Dies if requirements are not met.
 *
 * @since 3.0.0
 * @access private
 *
 * @global string $required_php_version The required PHP version string.
 * @global string $wp_version           The WordPress version string.
 */
    public function wpCheckPhpMysqlVersions(): void;
}
