<?php

namespace WpService\Contracts;

interface WpNavMenuDisabledCheck
{
    /**
 * Check whether to disable the Menu Locations meta box submit button and inputs.
 *
 * @since 3.6.0
 * @since 5.3.1 The `$display` parameter was added.
 *
 * @global bool $one_theme_location_no_menus to determine if no menus exist
 *
 * @param int|string $navMenuSelectedId ID, name, or slug of the currently selected menu.
 * @param bool $display              Whether to display or just return the string.
 * @return string|false Disabled attribute if at least one menu exists, false if not.
 */
    public function wpNavMenuDisabledCheck(int|string $navMenuSelectedId, bool $display = true): string|false;
}
