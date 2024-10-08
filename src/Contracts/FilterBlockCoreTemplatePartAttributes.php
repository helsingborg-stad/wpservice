<?php

namespace WpService\Contracts;

interface FilterBlockCoreTemplatePartAttributes
{
    /**
 * Sanitizes the value of the Template Part block's `tagName` attribute.
 *
 * @since 6.5.5
 *
 * @param string $attributeValue The attribute value to filter.
 * @param string $attributeName  The attribute name.
 * @param array[]|string $allowedHtml    An array of allowed HTML elements and attributes,
 *                                        or a context name such as 'post'. See wp_kses_allowed_html()
 *                                        for the list of accepted context names.
 * @return string The sanitized attribute value.
 */
    public function filterBlockCoreTemplatePartAttributes(string $attributeValue, string $attributeName, array|string $allowedHtml): string;
}
