<?php

namespace WpService\Contracts;

use WP_Post_Type;

interface GetPostTypeObject
{
    /**
     * Get the post type object.
     *
     * @param string $postType The post type.
     * @return WP_Post_Type|null The post type object.
     */
    public function getPostTypeObject(string $postType): ?WP_Post_Type;
}
