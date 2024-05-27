<?php

namespace WpService\Contracts;

use WP_Post;

interface GetPostTypes
{
    /**
     * @see https://developer.wordpress.org/reference/functions/get_post_types/
     *
     * @param array|string $args     Optional. An array of key => value arguments to match against
     *                               the post type objects. Default empty array.
     * @param string       $output   Optional. The type of output to return. Either 'names'
     *                               or 'objects'. Default 'names'.
     * @param string       $operator Optional. The logical operation to perform. 'or' means only one
     *                               element from the array needs to match; 'and' means all elements
     *                               must match; 'not' means no elements may match. Default 'and'.
     * @return string[]|WP_Post_Type[] An array of post type names or objects.
     */
    public function getPostTypes(
        array|string $args = array(), 
        string $output = 'names', 
        string $operator = 'and'
    ): array;
}