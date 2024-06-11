<?php

namespace WpService\Contracts;

interface WalkNavMenuTree
{
    /**
     * Retrieves the HTML list content for nav menu items.
     *
     * @see https://developer.wordpress.org/reference/functions/walk_nav_menu_tree/
     *
     * @param array    $items The menu items, sorted by each menu item's menu order.
     * @param int      $depth Depth of the item in reference to parents.
     * @param object   $args  An object containing wp_nav_menu() arguments.
     *                 (https://developer.wordpress.org/reference/functions/wp_nav_menu/)
     * @return string The HTML list content for the menu items.
     */
    public function walkNavMenuTree(array $items, int $depth, object $args): string;
}
