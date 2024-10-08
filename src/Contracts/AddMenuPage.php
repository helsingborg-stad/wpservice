<?php

namespace WpService\Contracts;

interface AddMenuPage
{
    /**
     * Adds a top-level menu page.
     *
     * This function takes a capability which will be used to determine whether
     * or not a page is included in the menu.
     *
     * The function which is hooked in to handle the output of the page must check
     * that the user has the required capability as well.
     *
     * @since 1.5.0
     *
     * @global array $menu
     * @global array $admin_page_hooks
     * @global array $_registered_pages
     * @global array $_parent_pages
     *
     * @param string $pageTitle The text to be displayed in the title tags of the page when the menu is selected.
     * @param string $menuTitle The text to be used for the menu.
     * @param string $capability The capability required for this menu to be displayed to the user.
     * @param string $menuSlug  The slug name to refer to this menu by. Should be unique for this menu page and only
     *                              include lowercase alphanumeric, dashes, and underscores characters to be compatible
     *                              with sanitize_key().
     * @param callable $callback   Optional. The function to be called to output the content for this page.
     * @param string $iconUrl   Optional. The URL to the icon to be used for this menu.
     *                              * Pass a base64-encoded SVG using a data URI, which will be colored to match
     *                                the color scheme. This should begin with 'data:image/svg+xml;base64,'.
     *                              * Pass the name of a Dashicons helper class to use a font icon,
     *                                e.g. 'dashicons-chart-pie'.
     *                              * Pass 'none' to leave div.wp-menu-image empty so an icon can be added via CSS.
     * @param int|float $position   Optional. The position in the menu order this item should appear.
     * @return string The resulting page's hook_suffix.
     */
    public function addMenuPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, string $iconUrl = '', int|float $position = null): string;
}
