<?php

namespace WpService\Contracts;

interface CheckThemeSwitched
{
    /**
 * Checks if a theme has been changed and runs 'after_switch_theme' hook on the next WP load.
 *
 * See {@see 'after_switch_theme'}.
 *
 * @since 3.3.0
 */
    public function checkThemeSwitched(): void;
}
