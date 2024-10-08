<?php

namespace WpService\Contracts;

interface WpWidgetsAddMenu
{
    /**
 * Appends the Widgets menu to the themes main menu.
 *
 * @since 2.2.0
 * @since 5.9.3 Don't specify menu order when the active theme is a block theme.
 *
 * @global array $submenu
 */
    public function wpWidgetsAddMenu(): void;
}
