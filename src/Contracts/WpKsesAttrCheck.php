<?php

namespace WpService\Contracts;

interface WpKsesAttrCheck
{
    /**
     * Determines whether an attribute is allowed.
     *
     * @since 4.2.3
     * @since 5.0.0 Added support for `data-*` wildcard attributes.
     *
     * @param string $name         The attribute name. Passed by reference. Returns empty string when not allowed.
     * @param string $value        The attribute value. Passed by reference. Returns a filtered value.
     * @param string $whole        The `name=value` input. Passed by reference. Returns filtered input.
     * @param string $vless        Whether the attribute is valueless. Use 'y' or 'n'.
     * @param string $element      The name of the element to which this attribute belongs.
     * @param array $allowedHtml The full list of allowed elements and attributes.
     * @return bool Whether or not the attribute is allowed.
     */
    public function wpKsesAttrCheck(string $name, string $value, string $whole, string $vless, string $element, array $allowedHtml): bool;
}
