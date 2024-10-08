<?php

namespace WpService\Contracts;

interface GetPostTypesBySupport
{
    /**
     * Retrieves a list of post type names that support a specific feature.
     *
     * @since 4.5.0
     *
     * @global array $_wp_post_type_features Post type features
     *
     * @param array|string $feature  Single feature or an array of features the post types should support.
     * @param string $operator Optional. The logical operation to perform. 'or' means
     *                               only one element from the array needs to match; 'and'
     *                               means all elements must match; 'not' means no elements may
     *                               match. Default 'and'.
     * @return string[] A list of post type names.
     */
    public function getPostTypesBySupport(array|string $feature, string $operator = 'and'): array;
}
