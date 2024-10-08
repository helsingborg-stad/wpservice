<?php

namespace WpService\Contracts;

interface WpCreateNavMenu
{
    /**
 * Creates a navigation menu.
 *
 * Note that `$menu_name` is expected to be pre-slashed.
 *
 * @since 3.0.0
 *
 * @param string $menuName Menu name.
 * @return int|\WP_Error Menu ID on success, WP_Error object on failure.
 */
    public function wpCreateNavMenu(string $menuName): int|\WP_Error;
}
