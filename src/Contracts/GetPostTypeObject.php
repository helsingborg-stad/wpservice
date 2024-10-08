<?php

namespace WpService\Contracts;

interface GetPostTypeObject
{
    /**
 * Retrieves a post type object by name.
 *
 * @since 3.0.0
 * @since 4.6.0 Object returned is now an instance of `WP_Post_Type`.
 *
 * @global array $wp_post_types List of post types.
 *
 * @see register_post_type()
 *
 * @param string $postType The name of a registered post type.
 * @return \WP_Post_Type|null WP_Post_Type object if it exists, null otherwise.
 */
    public function getPostTypeObject(string $postType): \WP_Post_Type|null;
}
