<?php

namespace WpService\Contracts;

interface WalkNavMenuTree
{
/**
 * Retrieves the HTML list content for nav menu items.
 *
 * @uses Walker_Nav_Menu to create HTML list content.
 * @since 3.0.0
 *
 * @param array $items The menu items, sorted by each menu item's menu order.
 * @param int $depth Depth of the item in reference to parents.
 * @param \stdClass $args  An object containing wp_nav_menu() arguments.
 * @return string The HTML list content for the menu items.
 */
    public function walkNavMenuTree(array $items, int $depth, \stdClass $args): string;
}
