<?php

namespace WpService\Contracts;

interface RestFindMatchingPatternPropertySchema
{
    /**
     * Finds the schema for a property using the patternProperties keyword.
     *
     * @since 5.6.0
     *
     * @param string $property The property name to check.
     * @param array $args     The schema array to use.
     * @return array|null      The schema of matching pattern property, or null if no patterns match.
     */
    public function restFindMatchingPatternPropertySchema(string $property, array $args): array|null;
}
