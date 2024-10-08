<?php

namespace WpService\Contracts;

interface WpListAuthors
{
    /**
 * Lists all the authors of the site, with several options available.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_list_authors/
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string|array $args {
 *     Optional. Array or string of default arguments.
 *
 *     @type string       $orderby       How to sort the authors. Accepts 'nicename', 'email', 'url', 'registered',
 *                                       'user_nicename', 'user_email', 'user_url', 'user_registered', 'name',
 *                                       'display_name', 'post_count', 'ID', 'meta_value', 'user_login'. Default 'name'.
 *     @type string       $order         Sorting direction for $orderby. Accepts 'ASC', 'DESC'. Default 'ASC'.
 *     @type int          $number        Maximum authors to return or display. Default empty (all authors).
 *     @type bool         $optioncount   Show the count in parenthesis next to the author's name. Default false.
 *     @type bool         $exclude_admin Whether to exclude the 'admin' account, if it exists. Default true.
 *     @type bool         $show_fullname Whether to show the author's full name. Default false.
 *     @type bool         $hide_empty    Whether to hide any authors with no posts. Default true.
 *     @type string       $feed          If not empty, show a link to the author's feed and use this text as the alt
 *                                       parameter of the link. Default empty.
 *     @type string       $feed_image    If not empty, show a link to the author's feed and use this image URL as
 *                                       clickable anchor. Default empty.
 *     @type string       $feed_type     The feed type to link to. Possible values include 'rss2', 'atom'.
 *                                       Default is the value of get_default_feed().
 *     @type bool         $echo          Whether to output the result or instead return it. Default true.
 *     @type string       $style         If 'list', each author is wrapped in an `<li>` element, otherwise the authors
 *                                       will be separated by commas.
 *     @type bool         $html          Whether to list the items in HTML form or plaintext. Default true.
 *     @type int[]|string $exclude       Array or comma/space-separated list of author IDs to exclude. Default empty.
 *     @type int[]|string $include       Array or comma/space-separated list of author IDs to include. Default empty.
 * }
 * @return void|string Void if 'echo' argument is true, list of authors if 'echo' is false.
 */
    public function wpListAuthors(string|array $args): string;
}
