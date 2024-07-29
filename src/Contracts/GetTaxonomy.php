<?php

namespace WpService\Contracts;

use WP_Taxonomy;

interface GetTaxonomy
{
    /**
     * Retrieves the taxonomy object of $taxonomy.
     *
     * The get_taxonomy function will first check that the parameter string given
     * is a taxonomy object and if it is, it will return it.
     *
     * @see https://developer.wordpress.org/reference/functions/get_taxonomy/
     *
     * @global WP_Taxonomy[] $wp_taxonomies The registered taxonomies.
     *
     * @param string $taxonomy Name of taxonomy object to return.
     * @return WP_Taxonomy|false The taxonomy object or false if $taxonomy doesn't exist.
     */
    public function getTaxonomy(string $taxonomy): WP_Taxonomy|false;
}