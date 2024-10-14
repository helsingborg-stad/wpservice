<?php

namespace WpService\Contracts;

interface PostTypeSupports
{
/**
 * Checks a post type's support for a given feature.
 *
 * @since 3.0.0
 *
 * @global array $_wp_post_type_features
 *
 * @param string $postType The post type being checked.
 * @param string $feature   The feature being checked.
 * @return bool Whether the post type supports the given feature.
 */
    public function postTypeSupports(string $postType, string $feature): bool;
}
