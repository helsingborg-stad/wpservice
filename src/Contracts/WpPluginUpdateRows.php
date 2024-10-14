<?php

namespace WpService\Contracts;

interface WpPluginUpdateRows
{
/**
 * Adds a callback to display update information for plugins with updates available.
 *
 * @since 2.9.0
 */
    public function wpPluginUpdateRows(): void;
}
