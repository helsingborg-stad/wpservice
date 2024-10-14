<?php

namespace WpService\Contracts;

interface IsObjectInTaxonomy
{
/**
 * Determines if the given object type is associated with the given taxonomy.
 *
 * @since 3.0.0
 *
 * @param string $objectType Object type string.
 * @param string $taxonomy    Single taxonomy name.
 * @return bool True if object is associated with the taxonomy, otherwise false.
 */
    public function isObjectInTaxonomy(string $objectType, string $taxonomy): bool;
}
