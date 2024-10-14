<?php

namespace WpService\Contracts;

interface GetCurrentScreen
{
/**
 * Get the current screen object
 *
 * @since 3.1.0
 *
 * @global WP_Screen $current_screen WordPress current screen object.
 *
 * @return \WP_Screen|null Current screen object or null when screen not defined.
 */
    public function getCurrentScreen(): \WP_Screen|null;
}
