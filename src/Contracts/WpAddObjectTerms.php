<?php

namespace WpService\Contracts;

interface WpAddObjectTerms
{
    /**
     * Adds term(s) associated with a given object.
     *
     * @since 3.6.0
     *
     * @param int $objectId The ID of the object to which the terms will be added.
     * @param string|int|array $terms     The slug(s) or ID(s) of the term(s) to add.
     * @param array|string $taxonomy  Taxonomy name.
     * @return array|\WP_Error Term taxonomy IDs of the affected terms.
     */
    public function wpAddObjectTerms(int $objectId, string|int|array $terms, array|string $taxonomy): array|\WP_Error;
}
