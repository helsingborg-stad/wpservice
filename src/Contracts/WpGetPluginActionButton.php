<?php

namespace WpService\Contracts;

interface WpGetPluginActionButton
{
    /**
     * Gets the markup for the plugin install action button.
     *
     * @since 6.5.0
     *
     * @param string $name           Plugin name.
     * @param array|object $data           {
     *     An array or object of plugin data. Can be retrieved from the API.
     *
     * @type string   $slug             The plugin slug.
     * @type string[] $requires_plugins An array of plugin dependency slugs.
     * @type string   $version          The plugin's version string. Used when getting the install status.
     * }
     * @param bool $compatiblePhp   The result of a PHP compatibility check.
     * @param bool $compatibleWp    The result of a WP compatibility check.
     * @return string The markup for the dependency row button. An empty string if the user does not have capabilities.
     */
    public function wpGetPluginActionButton(string $name, array|object $data, bool $compatiblePhp, bool $compatibleWp): string;
}
