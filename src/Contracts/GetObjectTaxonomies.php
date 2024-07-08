<?php

namespace WpService\Contracts;

use WP_Post;

interface GetObjectTaxonomies
{
/**
 * Returns the names or objects of the taxonomies which are registered for the requested object or object type,
 * such as a post object or post type name.
 *
 * Example:
 *
 *     $taxonomies = get_object_taxonomies( 'post' );
 *
 * This results in:
 *
 *     Array( 'category', 'post_tag' )
 *
 * @see https://developer.wordpress.org/reference/functions/get_object_taxonomies/
 *
 *
 * @param string|string[]|WP_Post $object_type Name of the type of taxonomy object, or an object (row from posts).
 * @param string                  $output      Optional. The type of output to return in the array. Accepts either
 *                                             'names' or 'objects'. Default 'names'.
 * @return string[]|WP_Taxonomy[] The names or objects of all taxonomies of `$object_type`.
 */
    public function getObjectTaxonomies(string|array $objectType, string $output = 'names'): array;
}
