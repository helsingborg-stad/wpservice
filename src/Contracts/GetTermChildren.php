<?php

namespace WpService\Contracts;

interface GetTermChildren
{
    /**
 * Merges all term children into a single array of their IDs.
 *
 * This recursive function will merge all of the children of $term into the same
 * array of term IDs. Only useful for taxonomies which are hierarchical.
 *
 * Will return an empty array if $term does not exist in $taxonomy.
 *
 * @since 2.3.0
 *
 * @param int $termId  ID of term to get children.
 * @param string $taxonomy Taxonomy name.
 * @return array|\WP_Error List of term IDs. WP_Error returned if `$taxonomy` does not exist.
 */
    public function getTermChildren(int $termId, string $taxonomy): array|\WP_Error;
}
