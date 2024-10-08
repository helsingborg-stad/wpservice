<?php

namespace WpService\Contracts;

interface RegisterTaxonomyForObjectType
{
    /**
     * Adds an already registered taxonomy to an object type.
     *
     * @since 3.0.0
     *
     * @global WP_Taxonomy[] $wp_taxonomies The registered taxonomies.
     *
     * @param string $taxonomy    Name of taxonomy object.
     * @param string $objectType Name of the object type.
     * @return bool True if successful, false if not.
     */
    public function registerTaxonomyForObjectType(string $taxonomy, string $objectType): bool;
}
