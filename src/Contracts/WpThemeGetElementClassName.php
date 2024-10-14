<?php

namespace WpService\Contracts;

interface WpThemeGetElementClassName
{
/**
 * Given an element name, returns a class name.
 *
 * Alias of WP_Theme_JSON::get_element_class_name.
 *
 * @since 6.1.0
 *
 * @param string $element The name of the element.
 *
 * @return string The name of the class.
 */
    public function wpThemeGetElementClassName(string $element): string;
}
