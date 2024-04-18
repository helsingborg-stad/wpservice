<?php

namespace WpService\Contracts;

use WP_Screen;

interface GetCurrentScreen
{
    /**
     * Get the current screen.
     *
     * @return WP_Screen|null The current screen object, or null if not available.
     */
    public function getCurrentScreen(): WP_Screen|null;
}
