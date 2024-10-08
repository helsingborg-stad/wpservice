<?php

namespace WpService\Contracts;

interface FilterBlockKses
{
    /**
 * Filters and sanitizes a parsed block to remove non-allowable HTML
 * from block attribute values.
 *
 * @since 5.3.1
 *
 * @param \WP_Block_Parser_Block $block             The parsed block object.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
 *                                                 or a context name such as 'post'. See wp_kses_allowed_html()
 *                                                 for the list of accepted context names.
 * @param string[] $allowedProtocols Optional. Array of allowed URL protocols.
 *                                                 Defaults to the result of wp_allowed_protocols().
 * @return array The filtered and sanitized block object result.
 */
    public function filterBlockKses(\WP_Block_Parser_Block $block, array|string $allowedHtml, array $allowedProtocols): array;
}
