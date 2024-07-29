<?php

namespace WpService\Contracts;

use WP_Post_Type;

interface GetPostTypeObject
{
    /**
     * Retrieves a post type object by name.
     *
     * @see https://developer.wordpress.org/reference/functions/get_post_type_object/
     *
     * @param string $post_type The name of a registered post type.
     * @return WP_Post_Type|null WP_Post_Type object if it exists, null otherwise.
     */
    public function getPostTypeObject(string $post_type): WP_Post_Type|null;
}
