<?php

namespace WpService\Contracts;

interface PaginateLinks
{
    /**
 * Retrieves paginated links for archive post pages.
 *
 * Technically, the function can be used to create paginated link list for any
 * area. The 'base' argument is used to reference the url, which will be used to
 * create the paginated links. The 'format' argument is then used for replacing
 * the page number. It is however, most likely and by default, to be used on the
 * archive post pages.
 *
 * The 'type' argument controls format of the returned value. The default is
 * 'plain', which is just a string with the links separated by a newline
 * character. The other possible values are either 'array' or 'list'. The
 * 'array' value will return an array of the paginated link list to offer full
 * control of display. The 'list' value will place all of the paginated links in
 * an unordered HTML list.
 *
 * The 'total' argument is the total amount of pages and is an integer. The
 * 'current' argument is the current page number and is also an integer.
 *
 * An example of the 'base' argument is "http://example.com/all_posts.php%_%"
 * and the '%_%' is required. The '%_%' will be replaced by the contents of in
 * the 'format' argument. An example for the 'format' argument is "?page=%#%"
 * and the '%#%' is also required. The '%#%' will be replaced with the page
 * number.
 *
 * You can include the previous and next links in the list by setting the
 * 'prev_next' argument to true, which it is by default. You can set the
 * previous text, by using the 'prev_text' argument. You can set the next text
 * by setting the 'next_text' argument.
 *
 * If the 'show_all' argument is set to true, then it will show all of the pages
 * instead of a short list of the pages near the current page. By default, the
 * 'show_all' is set to false and controlled by the 'end_size' and 'mid_size'
 * arguments. The 'end_size' argument is how many numbers on either the start
 * and the end list edges, by default is 1. The 'mid_size' argument is how many
 * numbers to either side of current page, but not including current page.
 *
 * It is possible to add query vars to the link by using the 'add_args' argument
 * and see add_query_arg() for more information.
 *
 * The 'before_page_number' and 'after_page_number' arguments allow users to
 * augment the links themselves. Typically this might be to add context to the
 * numbered links so that screen reader users understand what the links are for.
 * The text strings are added before and after the page number - within the
 * anchor tag.
 *
 * @since 2.1.0
 * @since 4.9.0 Added the `aria_current` argument.
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string|array $args {
 *     Optional. Array or string of arguments for generating paginated links for archives.
 *
 *     @type string $base               Base of the paginated url. Default empty.
 *     @type string $format             Format for the pagination structure. Default empty.
 *     @type int    $total              The total amount of pages. Default is the value WP_Query's
 *                                      `max_num_pages` or 1.
 *     @type int    $current            The current page number. Default is 'paged' query var or 1.
 *     @type string $aria_current       The value for the aria-current attribute. Possible values are 'page',
 *                                      'step', 'location', 'date', 'time', 'true', 'false'. Default is 'page'.
 *     @type bool   $show_all           Whether to show all pages. Default false.
 *     @type int    $end_size           How many numbers on either the start and the end list edges.
 *                                      Default 1.
 *     @type int    $mid_size           How many numbers to either side of the current pages. Default 2.
 *     @type bool   $prev_next          Whether to include the previous and next links in the list. Default true.
 *     @type string $prev_text          The previous page text. Default '&laquo; Previous'.
 *     @type string $next_text          The next page text. Default 'Next &raquo;'.
 *     @type string $type               Controls format of the returned value. Possible values are 'plain',
 *                                      'array' and 'list'. Default is 'plain'.
 *     @type array  $add_args           An array of query args to add. Default false.
 *     @type string $add_fragment       A string to append to each link. Default empty.
 *     @type string $before_page_number A string to appear before the page number. Default empty.
 *     @type string $after_page_number  A string to append after the page number. Default empty.
 * }
 * @return string|string[]|void String of page links or array of page links, depending on 'type' argument.
 *                              Void if total number of pages is less than 2.
 */
    public function paginateLinks(string|array $args): string|array;
}
