<?php

namespace WpService\Contracts;

interface GetAllPostTypeSupports
{
    /**
 * Gets all the post type features
 *
 * @since 3.4.0
 *
 * @global array $_wp_post_type_features
 *
 * @param string $postType The post type.
 * @return array Post type supports list.
 */
    public function getAllPostTypeSupports(string $postType): array;
}
