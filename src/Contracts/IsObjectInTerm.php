<?php

namespace WpService\Contracts;

interface IsObjectInTerm
{
    /**
 * Determines if the given object is associated with any of the given terms.
 *
 * The given terms are checked against the object's terms' term_ids, names and slugs.
 * Terms given as integers will only be checked against the object's terms' term_ids.
 * If no terms are given, determines if object is associated with any terms in the given taxonomy.
 *
 * @since 2.7.0
 *
 * @param int $objectId ID of the object (post ID, link ID, ...).
 * @param string $taxonomy  Single taxonomy name.
 * @param int|string|int[]|string[] $terms     Optional. Term ID, name, slug, or array of such
 *                                             to check against. Default null.
 * @return bool|\WP_Error WP_Error on input error.
 */
    public function isObjectInTerm(int $objectId, string $taxonomy, int|string|array $terms): bool|\WP_Error;
}
