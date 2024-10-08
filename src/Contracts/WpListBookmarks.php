<?php

namespace WpService\Contracts;

interface WpListBookmarks
{
    /**
 * Retrieves or echoes all of the bookmarks.
 *
 * List of default arguments are as follows:
 *
 * These options define how the Category name will appear before the category
 * links are displayed, if 'categorize' is 1. If 'categorize' is 0, then it will
 * display for only the 'title_li' string and only if 'title_li' is not empty.
 *
 * @since 2.1.0
 *
 * @see _walk_bookmarks()
 *
 * @param string|array $args {
 *     Optional. String or array of arguments to list bookmarks.
 *
 *     @type string       $orderby          How to order the links by. Accepts post fields. Default 'name'.
 *     @type string       $order            Whether to order bookmarks in ascending or descending order.
 *                                          Accepts 'ASC' (ascending) or 'DESC' (descending). Default 'ASC'.
 *     @type int          $limit            Amount of bookmarks to display. Accepts 1+ or -1 for all.
 *                                          Default -1.
 *     @type string       $category         Comma-separated list of category IDs to include links from.
 *                                          Default empty.
 *     @type string       $category_name    Category to retrieve links for by name. Default empty.
 *     @type int|bool     $hide_invisible   Whether to show or hide links marked as 'invisible'. Accepts
 *                                          1|true or 0|false. Default 1|true.
 *     @type int|bool     $show_updated     Whether to display the time the bookmark was last updated.
 *                                          Accepts 1|true or 0|false. Default 0|false.
 *     @type int|bool     $echo             Whether to echo or return the formatted bookmarks. Accepts
 *                                          1|true (echo) or 0|false (return). Default 1|true.
 *     @type int|bool     $categorize       Whether to show links listed by category or in a single column.
 *                                          Accepts 1|true (by category) or 0|false (one column). Default 1|true.
 *     @type int|bool     $show_description Whether to show the bookmark descriptions. Accepts 1|true or 0|false.
 *                                          Default 0|false.
 *     @type string       $title_li         What to show before the links appear. Default 'Bookmarks'.
 *     @type string       $title_before     The HTML or text to prepend to the $title_li string. Default '<h2>'.
 *     @type string       $title_after      The HTML or text to append to the $title_li string. Default '</h2>'.
 *     @type string|array $class            The CSS class or an array of classes to use for the $title_li.
 *                                          Default 'linkcat'.
 *     @type string       $category_before  The HTML or text to prepend to $title_before if $categorize is true.
 *                                          String must contain '%id' and '%class' to inherit the category ID and
 *                                          the $class argument used for formatting in themes.
 *                                          Default '<li id="%id" class="%class">'.
 *     @type string       $category_after   The HTML or text to append to $title_after if $categorize is true.
 *                                          Default '</li>'.
 *     @type string       $category_orderby How to order the bookmark category based on term scheme if $categorize
 *                                          is true. Default 'name'.
 *     @type string       $category_order   Whether to order categories in ascending or descending order if
 *                                          $categorize is true. Accepts 'ASC' (ascending) or 'DESC' (descending).
 *                                          Default 'ASC'.
 * }
 * @return void|string Void if 'echo' argument is true, HTML list of bookmarks if 'echo' is false.
 */
    public function wpListBookmarks(string|array $args): string;
}
