<?php

namespace WpService\Contracts;

interface WpPausedPlugins
{
    /**
     * Get the instance for storing paused plugins.
     *
     * @return \WP_Paused_Extensions_Storage
     */
    public function wpPausedPlugins(): \WP_Paused_Extensions_Storage;
}
