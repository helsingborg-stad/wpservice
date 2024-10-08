<?php

namespace WpService\Contracts;

interface MapMetaCap
{
    /**
 * Maps a capability to the primitive capabilities required of the given user to
 * satisfy the capability being checked.
 *
 * This function also accepts an ID of an object to map against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by this function to map to primitive
 * capabilities that a user or role requires, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     map_meta_cap( 'edit_posts', $user->ID );
 *     map_meta_cap( 'edit_post', $user->ID, $post->ID );
 *     map_meta_cap( 'edit_post_meta', $user->ID, $post->ID, $meta_key );
 *
 * This function does not check whether the user has the required capabilities,
 * it just returns what the required capabilities are.
 *
 * @since 2.0.0
 * @since 4.9.6 Added the `export_others_personal_data`, `erase_others_personal_data`,
 *              and `manage_privacy_options` capabilities.
 * @since 5.1.0 Added the `update_php` capability.
 * @since 5.2.0 Added the `resume_plugin` and `resume_theme` capabilities.
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 * @since 5.7.0 Added the `create_app_password`, `list_app_passwords`, `read_app_password`,
 *              `edit_app_password`, `delete_app_passwords`, `delete_app_password`,
 *              and `update_https` capabilities.
 *
 * @global array $post_type_meta_caps Used to get post type meta capabilities.
 *
 * @param string $cap     Capability being checked.
 * @param int $userId User ID.
 * @param mixed  ...$args Optional further parameters, typically starting with an object ID.
 * @return string[] Primitive capabilities required of the user.
 */
    public function mapMetaCap(string $cap, int $userId): array;
}
