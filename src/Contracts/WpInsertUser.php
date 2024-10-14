<?php

namespace WpService\Contracts;

interface WpInsertUser
{
/**
 * Inserts a user into the database.
 *
 * Most of the `$userdata` array fields have filters associated with the values. Exceptions are
 * 'ID', 'rich_editing', 'syntax_highlighting', 'comment_shortcuts', 'admin_color', 'use_ssl',
 * 'user_registered', 'user_activation_key', 'spam', and 'role'. The filters have the prefix
 * 'pre_user_' followed by the field name. An example using 'description' would have the filter
 * called 'pre_user_description' that can be hooked into.
 *
 * @since 2.0.0
 * @since 3.6.0 The `aim`, `jabber`, and `yim` fields were removed as default user contact
 *              methods for new installations. See wp_get_user_contact_methods().
 * @since 4.7.0 The `locale` field can be passed to `$userdata`.
 * @since 5.3.0 The `user_activation_key` field can be passed to `$userdata`.
 * @since 5.3.0 The `spam` field can be passed to `$userdata` (Multisite only).
 * @since 5.9.0 The `meta_input` field can be passed to `$userdata` to allow addition of user meta data.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array|object|WP_User $userdata {
 *     An array, object, or WP_User object of user data arguments.
 *
 * @type int    $ID                   User ID. If supplied, the user will be updated.
 * @type string $user_pass            The plain-text user password for new users.
 *                                        Hashed password for existing users.
 * @type string $user_login           The user's login username.
 * @type string $user_nicename        The URL-friendly user name.
 * @type string $user_url             The user URL.
 * @type string $user_email           The user email address.
 * @type string $display_name         The user's display name.
 *                                        Default is the user's username.
 * @type string $nickname             The user's nickname.
 *                                        Default is the user's username.
 * @type string $first_name           The user's first name. For new users, will be used
 *                                        to build the first part of the user's display name
 *                                        if `$display_name` is not specified.
 * @type string $last_name            The user's last name. For new users, will be used
 *                                        to build the second part of the user's display name
 *                                        if `$display_name` is not specified.
 * @type string $description          The user's biographical description.
 * @type string $rich_editing         Whether to enable the rich-editor for the user.
 *                                        Accepts 'true' or 'false' as a string literal,
 *                                        not boolean. Default 'true'.
 * @type string $syntax_highlighting  Whether to enable the rich code editor for the user.
 *                                        Accepts 'true' or 'false' as a string literal,
 *                                        not boolean. Default 'true'.
 * @type string $comment_shortcuts    Whether to enable comment moderation keyboard
 *                                        shortcuts for the user. Accepts 'true' or 'false'
 *                                        as a string literal, not boolean. Default 'false'.
 * @type string $admin_color          Admin color scheme for the user. Default 'fresh'.
 * @type bool   $use_ssl              Whether the user should always access the admin over
 *                                        https. Default false.
 * @type string $user_registered      Date the user registered in UTC. Format is 'Y-m-d H:i:s'.
 * @type string $user_activation_key  Password reset key. Default empty.
 * @type bool   $spam                 Multisite only. Whether the user is marked as spam.
 *                                        Default false.
 * @type string $show_admin_bar_front Whether to display the Admin Bar for the user
 *                                        on the site's front end. Accepts 'true' or 'false'
 *                                        as a string literal, not boolean. Default 'true'.
 * @type string $role                 User's role.
 * @type string $locale               User's locale. Default empty.
 * @type array  $meta_input           Array of custom user meta values keyed by meta key.
 *                                        Default empty.
 * }
 * @return int|\WP_Error The newly created user's ID or a WP_Error object if the user could not
 *                      be created.
 */
    public function wpInsertUser(array|object $userdata): int|\WP_Error;
}
