<?php

namespace WpService\Contracts;

interface WpGetArchives
{
    /**
 * Displays archive links based on type and format.
 *
 * @since 1.2.0
 * @since 4.4.0 The `$post_type` argument was added.
 * @since 5.2.0 The `$year`, `$monthnum`, `$day`, and `$w` arguments were added.
 *
 * @see get_archives_link()
 *
 * @global wpdb      $wpdb      WordPress database abstraction object.
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param string|array $args {
 *     Default archive links arguments. Optional.
 *
 *     @type string     $type            Type of archive to retrieve. Accepts 'daily', 'weekly', 'monthly',
 *                                       'yearly', 'postbypost', or 'alpha'. Both 'postbypost' and 'alpha'
 *                                       display the same archive link list as well as post titles instead
 *                                       of displaying dates. The difference between the two is that 'alpha'
 *                                       will order by post title and 'postbypost' will order by post date.
 *                                       Default 'monthly'.
 *     @type string|int $limit           Number of links to limit the query to. Default empty (no limit).
 *     @type string     $format          Format each link should take using the $before and $after args.
 *                                       Accepts 'link' (`<link>` tag), 'option' (`<option>` tag), 'html'
 *                                       (`<li>` tag), or a custom format, which generates a link anchor
 *                                       with $before preceding and $after succeeding. Default 'html'.
 *     @type string     $before          Markup to prepend to the beginning of each link. Default empty.
 *     @type string     $after           Markup to append to the end of each link. Default empty.
 *     @type bool       $show_post_count Whether to display the post count alongside the link. Default false.
 *     @type bool|int   $echo            Whether to echo or return the links list. Default 1|true to echo.
 *     @type string     $order           Whether to use ascending or descending order. Accepts 'ASC', or 'DESC'.
 *                                       Default 'DESC'.
 *     @type string     $post_type       Post type. Default 'post'.
 *     @type string     $year            Year. Default current year.
 *     @type string     $monthnum        Month number. Default current month number.
 *     @type string     $day             Day. Default current day.
 *     @type string     $w               Week. Default current week.
 * }
 * @return void|string Void if 'echo' argument is true, archive links if 'echo' is false.
 */
    public function wpGetArchives(string|array $args): string;
}
