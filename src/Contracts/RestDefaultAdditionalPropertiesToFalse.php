<?php

namespace WpService\Contracts;

interface RestDefaultAdditionalPropertiesToFalse
{
    /**
 * Sets the "additionalProperties" to false by default for all object definitions in the schema.
 *
 * @since 5.5.0
 * @since 5.6.0 Support the "patternProperties" keyword.
 *
 * @param array $schema The schema to modify.
 * @return array The modified schema.
 */
    public function restDefaultAdditionalPropertiesToFalse(array $schema): array;
}
