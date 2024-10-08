<?php

namespace WpService\Contracts;

interface RestGetRouteForTerm
{
    /**
 * Gets the REST API route for a term.
 *
 * @since 5.5.0
 *
 * @param int|\WP_Term $term Term ID or term object.
 * @return string The route path with a leading slash for the given term,
 *                or an empty string if there is not a route.
 */
    public function restGetRouteForTerm(int|\WP_Term $term): string;
}
