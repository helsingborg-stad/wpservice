<?php

namespace WpService\Contracts;

interface WpNavMenu
{
    /**
     * Displays a navigation menu.
     *
     * @since 3.0.0
     * @since 4.7.0 Added the `item_spacing` argument.
     * @since 5.5.0 Added the `container_aria_label` argument.
     *
     * @param array $args {
     *     Optional. Array of nav menu arguments.
     *
     * @type int|string|WP_Term $menu                 Desired menu. Accepts a menu ID, slug, name, or object.
     *                                                    Default empty.
     * @type string             $menu_class           CSS class to use for the ul element which forms the menu.
     *                                                    Default 'menu'.
     * @type string             $menu_id              The ID that is applied to the ul element which forms the menu.
     *                                                    Default is the menu slug, incremented.
     * @type string             $container            Whether to wrap the ul, and what to wrap it with.
     *                                                    Default 'div'.
     * @type string             $container_class      Class that is applied to the container.
     *                                                    Default 'menu-{menu slug}-container'.
     * @type string             $container_id         The ID that is applied to the container. Default empty.
     * @type string             $container_aria_label The aria-label attribute that is applied to the container
     *                                                    when it's a nav element. Default empty.
     * @type callable|false     $fallback_cb          If the menu doesn't exist, a callback function will fire.
     *                                                    Default is 'wp_page_menu'. Set to false for no fallback.
     * @type string             $before               Text before the link markup. Default empty.
     * @type string             $after                Text after the link markup. Default empty.
     * @type string             $link_before          Text before the link text. Default empty.
     * @type string             $link_after           Text after the link text. Default empty.
     * @type bool               $echo                 Whether to echo the menu or return it. Default true.
     * @type int                $depth                How many levels of the hierarchy are to be included.
     *                                                    0 means all. Default 0.
     *                                                    Default 0.
     * @type object             $walker               Instance of a custom walker class. Default empty.
     * @type string             $theme_location       Theme location to be used. Must be registered with
     *                                                    register_nav_menu() in order to be selectable by the user.
     * @type string             $items_wrap           How the list items should be wrapped. Uses printf() format with
     *                                                    numbered placeholders. Default is a ul with an id and class.
     * @type string             $item_spacing         Whether to preserve whitespace within the menu's HTML.
     *                                                    Accepts 'preserve' or 'discard'. Default 'preserve'.
     * }
     * @return void|string|false Void if 'echo' argument is true, menu output if 'echo' is false.
     *                           False if there are no items or no menu was found.
     */
    public function wpNavMenu(array $args = []): mixed;
}
