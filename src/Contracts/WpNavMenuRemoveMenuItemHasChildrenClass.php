<?php

namespace WpService\Contracts;

interface WpNavMenuRemoveMenuItemHasChildrenClass
{
/**
 * Remove the `menu-item-has-children` class from bottom level menu items.
 *
 * This runs on the {@see 'nav_menu_css_class'} filter. The $args and $depth
 * parameters were added after the filter was originally introduced in
 * WordPress 3.0.0 so this needs to allow for cases in which the filter is
 * called without them.
 *
 * @see https://core.trac.wordpress.org/ticket/56926
 *
 * @since 6.2.0
 *
 * @param string[] $classes   Array of the CSS classes that are applied to the menu item's `<li>` element.
 * @param \WP_Post $menuItem The current menu item object.
 * @param \stdClass|false $args      An object of wp_nav_menu() arguments. Default false ($args unspecified when filter is called).
 * @param int|false $depth     Depth of menu item. Default false ($depth unspecified when filter is called).
 * @return string[] Modified nav menu classes.
 */
    public function wpNavMenuRemoveMenuItemHasChildrenClass(array $classes, \WP_Post $menuItem, \stdClass|false $args = false, int|false $depth = false): array;
}
