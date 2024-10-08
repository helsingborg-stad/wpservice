<?php

namespace WpService\Contracts;

interface AuthorCan
{
    /**
     * Returns whether the author of the supplied post has the specified capability.
     *
     * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
     * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
     * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
     *
     * Example usage:
     *
     *     author_can( $post, 'edit_posts' );
     *     author_can( $post, 'edit_post', $post->ID );
     *     author_can( $post, 'edit_post_meta', $post->ID, $meta_key );
     *
     * @since 2.9.0
     * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
     *              by adding it to the function signature.
     *
     * @param int|\WP_Post $post       Post ID or post object.
     * @param string $capability Capability name.
     * @param mixed       ...$args    Optional further parameters, typically starting with an object ID.
     * @return bool Whether the post author has the given capability.
     */
    public function authorCan(int|\WP_Post $post, string $capability): bool;
}
