<?php

namespace WpService\Contracts;

interface UnregisterTaxonomy
{
    /**
 * Unregisters a taxonomy.
 *
 * Can not be used to unregister built-in taxonomies.
 *
 * @since 4.5.0
 *
 * @global WP_Taxonomy[] $wp_taxonomies List of taxonomies.
 *
 * @param string $taxonomy Taxonomy name.
 * @return true|\WP_Error True on success, WP_Error on failure or if the taxonomy doesn't exist.
 */
    public function unregisterTaxonomy(string $taxonomy): true|\WP_Error;
}
