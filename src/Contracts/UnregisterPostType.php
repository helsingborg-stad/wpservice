<?php

namespace WpService\Contracts;

interface UnregisterPostType
{
    /**
     * Unregisters a post type.
     *
     * Cannot be used to unregister built-in post types.
     *
     * @since 4.5.0
     *
     * @global array $wp_post_types List of post types.
     *
     * @param string $postType Post type to unregister.
     * @return true|\WP_Error True on success, WP_Error on failure or if the post type doesn't exist.
     */
    public function unregisterPostType(string $postType): true|\WP_Error;
}
