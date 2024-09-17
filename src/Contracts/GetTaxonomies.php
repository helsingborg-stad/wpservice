<?php

namespace WpService\Contracts;

use WP_Taxonomy;

interface GetTaxonomies
{
    /**
     * Retrieves a list of registered taxonomy names or objects.
     *
     * @see https://developer.wordpress.org/reference/functions/get_taxonomies/
     *
     * @return string[]|WP_Taxonomy[] An array of taxonomy names or objects.
     */
    public function getTaxonomies(): array;
}
