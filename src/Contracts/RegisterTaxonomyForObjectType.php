<?php

namespace WpService\Contracts;

interface RegisterTaxonomyForObjectType
{
    /**
     * Adds an already registered taxonomy to an object type.
     *
     * @see https://developer.wordpress.org/reference/functions/register_taxonomy_for_object_type/
     *
     * @param string $taxonomy    Name of taxonomy object.
     * @param string $objectType Name of the object type.
     * @return bool True if successful, false if not.
     */
    public function registerTaxonomyForObjectType(string $taxonomy, string $objectType): bool;
}
