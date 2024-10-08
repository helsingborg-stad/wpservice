<?php

namespace WpService\Contracts;

interface WpInitialConstants
{
    /**
     * Defines initial WordPress constants.
     *
     * @see wp_debug_mode()
     *
     * @since 3.0.0
     *
     * @global int    $blog_id    The current site ID.
     * @global string $wp_version The WordPress version string.
     */
    public function wpInitialConstants(): void;
}
