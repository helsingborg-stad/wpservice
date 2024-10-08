<?php

namespace WpService\Contracts;

interface RestGetAllowedSchemaKeywords
{
    /**
 * Get all valid JSON schema properties.
 *
 * @since 5.6.0
 *
 * @return string[] All valid JSON schema properties.
 */
    public function restGetAllowedSchemaKeywords(): array;
}
