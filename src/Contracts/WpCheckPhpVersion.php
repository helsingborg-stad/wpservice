<?php

namespace WpService\Contracts;

interface WpCheckPhpVersion
{
    /**
     * Checks if the user needs to update PHP.
     *
     * @since 5.1.0
     * @since 5.1.1 Added the {@see 'wp_is_php_version_acceptable'} filter.
     *
     * @return array|false {
     *     Array of PHP version data. False on failure.
     *
     * @type string $recommended_version The PHP version recommended by WordPress.
     * @type string $minimum_version     The minimum required PHP version.
     * @type bool   $is_supported        Whether the PHP version is actively supported.
     * @type bool   $is_secure           Whether the PHP version receives security updates.
     * @type bool   $is_acceptable       Whether the PHP version is still acceptable or warnings
     *                                       should be shown and an update recommended.
     * }
     */
    public function wpCheckPhpVersion(): array|false;
}
