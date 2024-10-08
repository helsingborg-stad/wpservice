<?php

namespace WpService\Contracts;

interface WpWelcomePanel
{
    /**
     * Displays a welcome panel to introduce users to WordPress.
     *
     * @since 3.3.0
     * @since 5.9.0 Send users to the Site Editor if the active theme is block-based.
     */
    public function wpWelcomePanel(): void;
}
