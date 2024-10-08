<?php

namespace WpService\Contracts;

interface WpGetObjectTerms
{
    /**
 * Retrieves the terms associated with the given object(s), in the supplied taxonomies.
 *
 * @since 2.3.0
 * @since 4.2.0 Added support for 'taxonomy', 'parent', and 'term_taxonomy_id' values of `$orderby`.
 *              Introduced `$parent` argument.
 * @since 4.4.0 Introduced `$meta_query` and `$update_term_meta_cache` arguments. When `$fields` is 'all' or
 *              'all_with_object_id', an array of `WP_Term` objects will be returned.
 * @since 4.7.0 Refactored to use WP_Term_Query, and to support any WP_Term_Query arguments.
 * @since 6.3.0 Passing `update_term_meta_cache` argument value false by default resulting in get_terms() to not
 *              prime the term meta cache.
 *
 * @param int|int[] $objectIds The ID(s) of the object(s) to retrieve.
 * @param string|string[] $taxonomies The taxonomy names to retrieve terms from.
 * @param array|string $args       See WP_Term_Query::__construct() for supported arguments.
 * @return WP_Term[]|int[]|string[]|string|WP_Error Array of terms, a count thereof as a numeric string,
 *                                                  or WP_Error if any of the taxonomies do not exist.
 *                                                  See WP_Term_Query::get_terms() for more information.
 */
    public function wpGetObjectTerms(int|array $objectIds, string|array $taxonomies, array|string $args = []): array|string|\WP_Error;
}
