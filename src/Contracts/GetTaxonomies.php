<?php

namespace WpService\Contracts;

interface GetTaxonomies
{
    /**
 * Retrieves a list of registered taxonomy names or objects.
 *
 * @since 3.0.0
 *
 * @global WP_Taxonomy[] $wp_taxonomies The registered taxonomies.
 *
 * @param array $args     Optional. An array of `key => value` arguments to match against the taxonomy objects.
 *                         Default empty array.
 * @param string $output   Optional. The type of output to return in the array. Either 'names'
 *                         or 'objects'. Default 'names'.
 * @param string $operator Optional. The logical operation to perform. Accepts 'and' or 'or'. 'or' means only
 *                         one element from the array needs to match; 'and' means all elements must match.
 *                         Default 'and'.
 * @return string[]|WP_Taxonomy[] An array of taxonomy names or objects.
 */
    public function getTaxonomies(array $args, string $output, string $operator): array;
}
