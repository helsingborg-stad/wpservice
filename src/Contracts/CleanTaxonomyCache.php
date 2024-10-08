<?php

namespace WpService\Contracts;

interface CleanTaxonomyCache
{
    /**
 * Cleans the caches for a taxonomy.
 *
 * @since 4.9.0
 *
 * @param string $taxonomy Taxonomy slug.
 */
    public function cleanTaxonomyCache(string $taxonomy): void;
}
