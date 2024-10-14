<?php

namespace WpService\Contracts;

interface UserCan
{
/**
 * Returns whether a particular user has the specified capability.
 *
 * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
 * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     user_can( $user->ID, 'edit_posts' );
 *     user_can( $user->ID, 'edit_post', $post->ID );
 *     user_can( $user->ID, 'edit_post_meta', $post->ID, $meta_key );
 *
 * @since 3.1.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 *
 * @param int|\WP_User $user       User ID or object.
 * @param string $capability Capability name.
 * @param mixed       ...$args    Optional further parameters, typically starting with an object ID.
 * @return bool Whether the user has the given capability.
 */
    public function userCan(int|\WP_User $user, string $capability, mixed ...$args): bool;
}
