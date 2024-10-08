<?php

namespace WpService\Contracts;

interface GetTheAuthorMeta
{
    /**
 * Retrieves the requested data of the author of the current post.
 *
 * Valid values for the `$field` parameter include:
 *
 * - admin_color
 * - aim
 * - comment_shortcuts
 * - description
 * - display_name
 * - first_name
 * - ID
 * - jabber
 * - last_name
 * - nickname
 * - plugins_last_view
 * - plugins_per_page
 * - rich_editing
 * - syntax_highlighting
 * - user_activation_key
 * - user_description
 * - user_email
 * - user_firstname
 * - user_lastname
 * - user_level
 * - user_login
 * - user_nicename
 * - user_pass
 * - user_registered
 * - user_status
 * - user_url
 * - yim
 *
 * @since 2.8.0
 *
 * @global WP_User $authordata The current author's data.
 *
 * @param string $field   Optional. The user field to retrieve. Default empty.
 * @param int|false $userId Optional. User ID. Defaults to the current post author.
 * @return string The author's field from the current author's DB object, otherwise an empty string.
 */
    public function getTheAuthorMeta(string $field = '', int|false $userId = false): string;
}
