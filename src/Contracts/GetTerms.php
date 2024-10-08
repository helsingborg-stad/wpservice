<?php

namespace WpService\Contracts;

interface GetTerms
{
    /**
     * Retrieves the terms in a given taxonomy or list of taxonomies.
     *
     * You can fully inject any customizations to the query before it is sent, as
     * well as control the output with a filter.
     *
     * The return type varies depending on the value passed to `$args['fields']`. See
     * WP_Term_Query::get_terms() for details. In all cases, a `WP_Error` object will
     * be returned if an invalid taxonomy is requested.
     *
     * The {@see 'get_terms'} filter will be called when the cache has the term and will
     * pass the found term along with the array of $taxonomies and array of $args.
     * This filter is also called before the array of terms is passed and will pass
     * the array of terms, along with the $taxonomies and $args.
     *
     * The {@see 'list_terms_exclusions'} filter passes the compiled exclusions along with
     * the $args.
     *
     * The {@see 'get_terms_orderby'} filter passes the `ORDER BY` clause for the query
     * along with the $args array.
     *
     * Taxonomy or an array of taxonomies should be passed via the 'taxonomy' argument
     * in the `$args` array:
     *
     *     $terms = get_terms( array(
     *         'taxonomy'   => 'post_tag',
     *         'hide_empty' => false,
     *     ) );
     *
     * Prior to 4.5.0, taxonomy was passed as the first parameter of `get_terms()`.
     *
     * @since 2.3.0
     * @since 4.2.0 Introduced 'name' and 'childless' parameters.
     * @since 4.4.0 Introduced the ability to pass 'term_id' as an alias of 'id' for the `orderby` parameter.
     *              Introduced the 'meta_query' and 'update_term_meta_cache' parameters. Converted to return
     *              a list of WP_Term objects.
     * @since 4.5.0 Changed the function signature so that the `$args` array can be provided as the first parameter.
     *              Introduced 'meta_key' and 'meta_value' parameters. Introduced the ability to order results by metadata.
     * @since 4.8.0 Introduced 'suppress_filter' parameter.
     *
     * @internal The `$deprecated` parameter is parsed for backward compatibility only.
     *
     * @param array|string $args       Optional. Array or string of arguments. See WP_Term_Query::__construct()
     *                                 for information on accepted arguments. Default empty array.
     * @param array|string $deprecated Optional. Argument array, when using the legacy function parameter format.
     *                                 If present, this parameter will be interpreted as `$args`, and the first
     *                                 function parameter will be parsed as a taxonomy or array of taxonomies.
     *                                 Default empty.
     * @return WP_Term[]|int[]|string[]|string|WP_Error Array of terms, a count thereof as a numeric string,
     *                                                  or WP_Error if any of the taxonomies do not exist.
     *                                                  See the function description for more information.
     */
    public function getTerms(array|string $args = [], array|string $deprecated = ''): array|string|\WP_Error;
}
