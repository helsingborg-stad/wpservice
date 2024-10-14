<?php

namespace WpService\Contracts;

interface WpDropdownUsers
{
/**
 * Creates dropdown HTML content of users.
 *
 * The content can either be displayed, which it is by default or retrieved by
 * setting the 'echo' argument. The 'include' and 'exclude' arguments do not
 * need to be used; all users will be displayed in that case. Only one can be
 * used, either 'include' or 'exclude', but not both.
 *
 * The available arguments are as follows:
 *
 * @since 2.3.0
 * @since 4.5.0 Added the 'display_name_with_login' value for 'show'.
 * @since 4.7.0 Added the 'role', 'role__in', and 'role__not_in' parameters.
 * @since 5.9.0 Added the 'capability', 'capability__in', and 'capability__not_in' parameters.
 *              Deprecated the 'who' parameter.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to generate a drop-down of users.
 *     See WP_User_Query::prepare_query() for additional available arguments.
 *
 * @type string          $show_option_all         Text to show as the drop-down default (all).
 *                                                    Default empty.
 * @type string          $show_option_none        Text to show as the drop-down default when no
 *                                                    users were found. Default empty.
 * @type int|string      $option_none_value       Value to use for `$show_option_none` when no users
 *                                                    were found. Default -1.
 * @type string          $hide_if_only_one_author Whether to skip generating the drop-down
 *                                                    if only one user was found. Default empty.
 * @type string          $orderby                 Field to order found users by. Accepts user fields.
 *                                                    Default 'display_name'.
 * @type string          $order                   Whether to order users in ascending or descending
 *                                                    order. Accepts 'ASC' (ascending) or 'DESC' (descending).
 *                                                    Default 'ASC'.
 * @type int[]|string    $include                 Array or comma-separated list of user IDs to include.
 *                                                    Default empty.
 * @type int[]|string    $exclude                 Array or comma-separated list of user IDs to exclude.
 *                                                    Default empty.
 * @type bool|int        $multi                   Whether to skip the ID attribute on the 'select' element.
 *                                                    Accepts 1|true or 0|false. Default 0|false.
 * @type string          $show                    User data to display. If the selected item is empty
 *                                                    then the 'user_login' will be displayed in parentheses.
 *                                                    Accepts any user field, or 'display_name_with_login' to show
 *                                                    the display name with user_login in parentheses.
 *                                                    Default 'display_name'.
 * @type int|bool        $echo                    Whether to echo or return the drop-down. Accepts 1|true (echo)
 *                                                    or 0|false (return). Default 1|true.
 * @type int             $selected                Which user ID should be selected. Default 0.
 * @type bool            $include_selected        Whether to always include the selected user ID in the drop-
 *                                                    down. Default false.
 * @type string          $name                    Name attribute of select element. Default 'user'.
 * @type string          $id                      ID attribute of the select element. Default is the value of `$name`.
 * @type string          $class                   Class attribute of the select element. Default empty.
 * @type int             $blog_id                 ID of blog (Multisite only). Default is ID of the current blog.
 * @type string          $who                     Deprecated, use `$capability` instead.
 *                                                    Which type of users to query. Accepts only an empty string or
 *                                                    'authors'. Default empty (all users).
 * @type string|string[] $role                    An array or a comma-separated list of role names that users
 *                                                    must match to be included in results. Note that this is
 *                                                    an inclusive list: users must match *each* role. Default empty.
 * @type string[]        $role__in                An array of role names. Matched users must have at least one
 *                                                    of these roles. Default empty array.
 * @type string[]        $role__not_in            An array of role names to exclude. Users matching one or more
 *                                                    of these roles will not be included in results. Default empty array.
 * @type string|string[] $capability              An array or a comma-separated list of capability names that users
 *                                                    must match to be included in results. Note that this is
 *                                                    an inclusive list: users must match *each* capability.
 *                                                    Does NOT work for capabilities not in the database or filtered
 *                                                    via {@see 'map_meta_cap'}. Default empty.
 * @type string[]        $capability__in          An array of capability names. Matched users must have at least one
 *                                                    of these capabilities.
 *                                                    Does NOT work for capabilities not in the database or filtered
 *                                                    via {@see 'map_meta_cap'}. Default empty array.
 * @type string[]        $capability__not_in      An array of capability names to exclude. Users matching one or more
 *                                                    of these capabilities will not be included in results.
 *                                                    Does NOT work for capabilities not in the database or filtered
 *                                                    via {@see 'map_meta_cap'}. Default empty array.
 * }
 * @return string HTML dropdown list of users.
 */
    public function wpDropdownUsers(array|string $args = ''): string;
}
