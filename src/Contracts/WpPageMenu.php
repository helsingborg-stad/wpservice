<?php

namespace WpService\Contracts;

interface WpPageMenu
{
    /**
 * Displays or retrieves a list of pages with an optional home link.
 *
 * The arguments are listed below and part of the arguments are for wp_list_pages() function.
 * Check that function for more info on those arguments.
 *
 * @since 2.7.0
 * @since 4.4.0 Added `menu_id`, `container`, `before`, `after`, and `walker` arguments.
 * @since 4.7.0 Added the `item_spacing` argument.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to generate a page menu. See wp_list_pages() for additional arguments.
 *
 *     @type string          $sort_column  How to sort the list of pages. Accepts post column names.
 *                                         Default 'menu_order, post_title'.
 *     @type string          $menu_id      ID for the div containing the page list. Default is empty string.
 *     @type string          $menu_class   Class to use for the element containing the page list. Default 'menu'.
 *     @type string          $container    Element to use for the element containing the page list. Default 'div'.
 *     @type bool            $echo         Whether to echo the list or return it. Accepts true (echo) or false (return).
 *                                         Default true.
 *     @type int|bool|string $show_home    Whether to display the link to the home page. Can just enter the text
 *                                         you'd like shown for the home link. 1|true defaults to 'Home'.
 *     @type string          $link_before  The HTML or text to prepend to $show_home text. Default empty.
 *     @type string          $link_after   The HTML or text to append to $show_home text. Default empty.
 *     @type string          $before       The HTML or text to prepend to the menu. Default is '<ul>'.
 *     @type string          $after        The HTML or text to append to the menu. Default is '</ul>'.
 *     @type string          $item_spacing Whether to preserve whitespace within the menu's HTML. Accepts 'preserve'
 *                                         or 'discard'. Default 'discard'.
 *     @type Walker          $walker       Walker instance to use for listing pages. Default empty which results in a
 *                                         Walker_Page instance being used.
 * }
 * @return void|string Void if 'echo' argument is true, HTML menu if 'echo' is false.
 */
    public function wpPageMenu(array|string $args = []): string;
}
