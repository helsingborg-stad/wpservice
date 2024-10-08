<?php

namespace WpService\Contracts;

interface WpListUsers
{
    /**
 * Lists all the users of the site, with several options available.
 *
 * @since 5.9.0
 *
 * @param string|array $args {
 *     Optional. Array or string of default arguments.
 *
 *     @type string $orderby       How to sort the users. Accepts 'nicename', 'email', 'url', 'registered',
 *                                 'user_nicename', 'user_email', 'user_url', 'user_registered', 'name',
 *                                 'display_name', 'post_count', 'ID', 'meta_value', 'user_login'. Default 'name'.
 *     @type string $order         Sorting direction for $orderby. Accepts 'ASC', 'DESC'. Default 'ASC'.
 *     @type int    $number        Maximum users to return or display. Default empty (all users).
 *     @type bool   $exclude_admin Whether to exclude the 'admin' account, if it exists. Default false.
 *     @type bool   $show_fullname Whether to show the user's full name. Default false.
 *     @type string $feed          If not empty, show a link to the user's feed and use this text as the alt
 *                                 parameter of the link. Default empty.
 *     @type string $feed_image    If not empty, show a link to the user's feed and use this image URL as
 *                                 clickable anchor. Default empty.
 *     @type string $feed_type     The feed type to link to, such as 'rss2'. Defaults to default feed type.
 *     @type bool   $echo          Whether to output the result or instead return it. Default true.
 *     @type string $style         If 'list', each user is wrapped in an `<li>` element, otherwise the users
 *                                 will be separated by commas.
 *     @type bool   $html          Whether to list the items in HTML form or plaintext. Default true.
 *     @type string $exclude       An array, comma-, or space-separated list of user IDs to exclude. Default empty.
 *     @type string $include       An array, comma-, or space-separated list of user IDs to include. Default empty.
 * }
 * @return string|null The output if echo is false. Otherwise null.
 */
    public function wpListUsers(string|array $args): string|null;
}
