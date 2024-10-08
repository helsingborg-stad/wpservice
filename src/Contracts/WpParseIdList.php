<?php

namespace WpService\Contracts;

interface WpParseIdList
{
    /**
 * Cleans up an array, comma- or space-separated list of IDs.
 *
 * @since 3.0.0
 * @since 5.1.0 Refactored to use wp_parse_list().
 *
 * @param array|string $inputList List of IDs.
 * @return int[] Sanitized array of IDs.
 */
    public function wpParseIdList(array|string $inputList): array;
}
