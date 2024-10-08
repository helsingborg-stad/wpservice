<?php

namespace WpService\Contracts;

interface GetTerm
{
    /**
 * Gets all term data from database by term ID.
 *
 * The usage of the get_term function is to apply filters to a term object. It
 * is possible to get a term object from the database before applying the
 * filters.
 *
 * $term ID must be part of $taxonomy, to get from the database. Failure, might
 * be able to be captured by the hooks. Failure would be the same value as $wpdb
 * returns for the get_row method.
 *
 * There are two hooks, one is specifically for each term, named 'get_term', and
 * the second is for the taxonomy name, 'term_$taxonomy'. Both hooks gets the
 * term object, and the taxonomy name as parameters. Both hooks are expected to
 * return a term object.
 *
 * {@see 'get_term'} hook - Takes two parameters the term Object and the taxonomy name.
 * Must return term object. Used in get_term() as a catch-all filter for every
 * $term.
 *
 * {@see 'get_$taxonomy'} hook - Takes two parameters the term Object and the taxonomy
 * name. Must return term object. $taxonomy will be the taxonomy name, so for
 * example, if 'category', it would be 'get_category' as the filter name. Useful
 * for custom taxonomies or plugging into default taxonomies.
 *
 * @todo Better formatting for DocBlock
 *
 * @since 2.3.0
 * @since 4.4.0 Converted to return a WP_Term object if `$output` is `OBJECT`.
 *              The `$taxonomy` parameter was made optional.
 *
 * @see sanitize_term_field() The $context param lists the available values for get_term_by() $filter param.
 *
 * @param int|WP_Term|object $term     If integer, term data will be fetched from the database,
 *                                     or from the cache if available.
 *                                     If stdClass object (as in the results of a database query),
 *                                     will apply filters and return a `WP_Term` object with the `$term` data.
 *                                     If `WP_Term`, will return `$term`.
 * @param string $taxonomy Optional. Taxonomy name that `$term` is part of.
 * @param string $output   Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                     correspond to a WP_Term object, an associative array, or a numeric array,
 *                                     respectively. Default OBJECT.
 * @param string $filter   Optional. How to sanitize term fields. Default 'raw'.
 * @return \WP_Term|array|\WP_Error|null WP_Term instance (or array) on success, depending on the `$output` value.
 *                                     WP_Error if `$taxonomy` does not exist. Null for miscellaneous failure.
 */
    public function getTerm(int|object $term, string $taxonomy = '', string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|\WP_Error|null;
}
