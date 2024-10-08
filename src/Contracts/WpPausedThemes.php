<?php

namespace WpService\Contracts;

interface WpPausedThemes
{
    /**
     * Get the instance for storing paused extensions.
     *
     * @return \WP_Paused_Extensions_Storage
     */
    public function wpPausedThemes(): \WP_Paused_Extensions_Storage;
}
