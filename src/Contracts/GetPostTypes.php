<?php

namespace WpService\Contracts;

interface GetPostTypes
{
    /**
 * Gets a list of all registered post type objects.
 *
 * @since 2.9.0
 *
 * @global array $wp_post_types List of post types.
 *
 * @see register_post_type() for accepted arguments.
 *
 * @param array|string $args     Optional. An array of key => value arguments to match against
 *                               the post type objects. Default empty array.
 * @param string $output   Optional. The type of output to return. Either 'names'
 *                               or 'objects'. Default 'names'.
 * @param string $operator Optional. The logical operation to perform. 'or' means only one
 *                               element from the array needs to match; 'and' means all elements
 *                               must match; 'not' means no elements may match. Default 'and'.
 * @return string[]|WP_Post_Type[] An array of post type names or objects.
 */
    public function getPostTypes(array|string $args = [], string $output = 'names', string $operator = 'and'): array;
}
