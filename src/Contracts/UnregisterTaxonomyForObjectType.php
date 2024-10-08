<?php

namespace WpService\Contracts;

interface UnregisterTaxonomyForObjectType
{
    /**
 * Removes an already registered taxonomy from an object type.
 *
 * @since 3.7.0
 *
 * @global WP_Taxonomy[] $wp_taxonomies The registered taxonomies.
 *
 * @param string $taxonomy    Name of taxonomy object.
 * @param string $objectType Name of the object type.
 * @return bool True if successful, false if not.
 */
    public function unregisterTaxonomyForObjectType(string $taxonomy, string $objectType): bool;
}
