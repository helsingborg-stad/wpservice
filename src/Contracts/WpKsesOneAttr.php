<?php

namespace WpService\Contracts;

interface WpKsesOneAttr
{
    /**
 * Filters one HTML attribute and ensures its value is allowed.
 *
 * This function can escape data in some situations where `wp_kses()` must strip the whole attribute.
 *
 * @since 4.2.3
 *
 * @param string $attr    The 'whole' attribute, including name and value.
 * @param string $element The HTML element name to which the attribute belongs.
 * @return string Filtered attribute.
 */
    public function wpKsesOneAttr(string $attr, string $element): string;
}
