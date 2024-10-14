<?php

namespace WpService\Contracts;

interface RegisterSidebars
{
/**
 * Creates multiple sidebars.
 *
 * If you wanted to quickly create multiple sidebars for a theme or internally.
 * This function will allow you to do so. If you don't pass the 'name' and/or
 * 'id' in `$args`, then they will be built for you.
 *
 * @since 2.2.0
 *
 * @see register_sidebar() The second parameter is documented by register_sidebar() and is the same here.
 *
 * @global array $wp_registered_sidebars The new sidebars are stored in this array by sidebar ID.
 *
 * @param int $number Optional. Number of sidebars to create. Default 1.
 * @param array|string $args {
 *     Optional. Array or string of arguments for building a sidebar.
 *
 * @type string $id   The base string of the unique identifier for each sidebar. If provided, and multiple
 *                        sidebars are being defined, the ID will have "-2" appended, and so on.
 *                        Default 'sidebar-' followed by the number the sidebar creation is currently at.
 * @type string $name The name or title for the sidebars displayed in the admin dashboard. If registering
 *                        more than one sidebar, include '%d' in the string as a placeholder for the uniquely
 *                        assigned number for each sidebar.
 *                        Default 'Sidebar' for the first sidebar, otherwise 'Sidebar %d'.
 * }
 */
    public function registerSidebars(int $number = 1, array|string $args = []): void;
}
