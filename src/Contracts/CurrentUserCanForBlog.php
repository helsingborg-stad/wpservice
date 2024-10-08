<?php

namespace WpService\Contracts;

interface CurrentUserCanForBlog
{
    /**
 * Returns whether the current user has the specified capability for a given site.
 *
 * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
 * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     current_user_can_for_blog( $blog_id, 'edit_posts' );
 *     current_user_can_for_blog( $blog_id, 'edit_post', $post->ID );
 *     current_user_can_for_blog( $blog_id, 'edit_post_meta', $post->ID, $meta_key );
 *
 * @since 3.0.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 * @since 5.8.0 Wraps current_user_can() after switching to blog.
 *
 * @param int $blogId    Site ID.
 * @param string $capability Capability name.
 * @param mixed  ...$args    Optional further parameters, typically starting with an object ID.
 * @return bool Whether the user has the given capability.
 */
    public function currentUserCanForBlog(int $blogId, string $capability): bool;
}
