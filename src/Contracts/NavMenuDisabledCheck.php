<?php

namespace WpService\Contracts;

interface NavMenuDisabledCheck
{
    /**
     * Check whether to disable the Menu Locations meta box submit button and inputs.
     *
     * @see https://developer.wordpress.org/reference/functions/wp_nav_menu_disabled_check/
     *
     * @global bool $one_theme_location_no_menus to determine if no menus exist
     *
     * @param int|string $nav_menu_selected_id ID, name, or slug of the currently selected menu.
     * @param bool       $display              Whether to display or just return the string.
     * @return string|false Disabled attribute if at least one menu exists, false if not.
     */
    public function navMenuDisabledCheck(int|string $nav_menu_selected_id, bool $display = true ): string|false;
}