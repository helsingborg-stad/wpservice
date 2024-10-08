<?php

namespace WpService\Contracts;

interface RestGetRouteForTaxonomyItems
{
    /**
     * Gets the REST API route for a taxonomy.
     *
     * @since 5.9.0
     *
     * @param string $taxonomy Name of taxonomy.
     * @return string The route path with a leading slash for the given taxonomy.
     */
    public function restGetRouteForTaxonomyItems(string $taxonomy): string;
}
