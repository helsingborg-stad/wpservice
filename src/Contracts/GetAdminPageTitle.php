<?php

namespace WpService\Contracts;

interface GetAdminPageTitle
{
    /**
     * Gets the title of the current admin page.
     *
     * @since 1.5.0
     *
     * @global string $title       The title of the current screen.
     * @global array  $menu
     * @global array  $submenu
     * @global string $pagenow     The filename of the current screen.
     * @global string $typenow     The post type of the current screen.
     * @global string $plugin_page
     *
     * @return string The title of the current admin page.
     */
    public function getAdminPageTitle(): string;
}
