<?php

namespace WpService\Contracts;

interface FilterBlockKsesValue
{
/**
 * Filters and sanitizes a parsed block attribute value to remove
 * non-allowable HTML.
 *
 * @since 5.3.1
 * @since 6.5.5 Added the `$block_context` parameter.
 *
 * @param string[]|string $value             The attribute value to filter.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
 *                                           or a context name such as 'post'. See wp_kses_allowed_html()
 *                                           for the list of accepted context names.
 * @param string[] $allowedProtocols Optional. Array of allowed URL protocols.
 *                                           Defaults to the result of wp_allowed_protocols().
 * @param array $blockContext     Optional. The block the attribute belongs to, in parsed block array format.
 * @return string[]|string The filtered and sanitized result.
 */
    public function filterBlockKsesValue(array|string $value, array|string $allowedHtml, array $allowedProtocols = [], array $blockContext = null): array|string;
}
