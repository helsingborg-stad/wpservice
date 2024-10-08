<?php

namespace WpService\Contracts;

interface WpNormalizeRemoteBlockPattern
{
    /**
 * Normalize the pattern properties to camelCase.
 *
 * The API's format is snake_case, `register_block_pattern()` expects camelCase.
 *
 * @since 6.2.0
 * @access private
 *
 * @param array $pattern Pattern as returned from the Pattern Directory API.
 * @return array Normalized pattern.
 */
    public function wpNormalizeRemoteBlockPattern(array $pattern): array;
}
