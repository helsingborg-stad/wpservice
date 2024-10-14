<?php

namespace WpService\Contracts;

interface IsTaxonomyViewable
{
/**
 * Determines whether a taxonomy is considered "viewable".
 *
 * @since 5.1.0
 *
 * @param string|\WP_Taxonomy $taxonomy Taxonomy name or object.
 * @return bool Whether the taxonomy should be considered viewable.
 */
    public function isTaxonomyViewable(string|\WP_Taxonomy $taxonomy): bool;
}
