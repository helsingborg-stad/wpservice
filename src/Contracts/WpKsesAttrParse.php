<?php

namespace WpService\Contracts;

interface WpKsesAttrParse
{
    /**
     * Finds all attributes of an HTML element.
     *
     * Does not modify input.  May return "evil" output.
     *
     * Based on `wp_kses_split2()` and `wp_kses_attr()`.
     *
     * @since 4.2.3
     *
     * @param string $element HTML element.
     * @return array|false List of attributes found in the element. Returns false on failure.
     */
    public function wpKsesAttrParse(string $element): array|false;
}
