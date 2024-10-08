<?php

namespace WpService\Contracts;

interface ShowAdminBar
{
    /**
 * Sets the display status of the admin bar.
 *
 * This can be called immediately upon plugin load. It does not need to be called
 * from a function hooked to the {@see 'init'} action.
 *
 * @since 3.1.0
 *
 * @global bool $show_admin_bar
 *
 * @param bool $show Whether to allow the admin bar to show.
 */
    public function showAdminBar(bool $show): void;
}
