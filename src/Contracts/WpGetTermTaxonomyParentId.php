<?php

namespace WpService\Contracts;

interface WpGetTermTaxonomyParentId
{
/**
 * Returns the term's parent's term ID.
 *
 * @since 3.1.0
 *
 * @param int $termId  Term ID.
 * @param string $taxonomy Taxonomy name.
 * @return int|false Parent term ID on success, false on failure.
 */
    public function wpGetTermTaxonomyParentId(int $termId, string $taxonomy): int|false;
}
