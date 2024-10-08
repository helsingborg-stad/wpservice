<?php

namespace WpService\Contracts;

interface WpKsesAttr
{
    /**
 * Removes all attributes, if none are allowed for this element.
 *
 * If some are allowed it calls `wp_kses_hair()` to split them further, and then
 * it builds up new HTML code from the data that `wp_kses_hair()` returns. It also
 * removes `<` and `>` characters, if there are any left. One more thing it does
 * is to check if the tag has a closing XHTML slash, and if it does, it puts one
 * in the returned code as well.
 *
 * An array of allowed values can be defined for attributes. If the attribute value
 * doesn't fall into the list, the attribute will be removed from the tag.
 *
 * Attributes can be marked as required. If a required attribute is not present,
 * KSES will remove all attributes from the tag. As KSES doesn't match opening and
 * closing tags, it's not possible to safely remove the tag itself, the safest
 * fallback is to strip all attributes from the tag, instead.
 *
 * @since 1.0.0
 * @since 5.9.0 Added support for an array of allowed values for attributes.
 *              Added support for required attributes.
 *
 * @param string $element           HTML element/tag.
 * @param string $attr              HTML attributes from HTML element to closing HTML element tag.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
 *                                          or a context name such as 'post'. See wp_kses_allowed_html()
 *                                          for the list of accepted context names.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 * @return string Sanitized HTML element.
 */
    public function wpKsesAttr(string $element, string $attr, array|string $allowedHtml, array $allowedProtocols): string;
}
