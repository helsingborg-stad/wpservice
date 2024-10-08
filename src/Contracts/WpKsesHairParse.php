<?php

namespace WpService\Contracts;

interface WpKsesHairParse
{
    /**
     * Builds an attribute list from string containing attributes.
     *
     * Does not modify input.  May return "evil" output.
     * In case of unexpected input, returns false instead of stripping things.
     *
     * Based on `wp_kses_hair()` but does not return a multi-dimensional array.
     *
     * @since 4.2.3
     *
     * @param string $attr Attribute list from HTML element to closing HTML element tag.
     * @return array|false List of attributes found in $attr. Returns false on failure.
     */
    public function wpKsesHairParse(string $attr): array|false;
}
