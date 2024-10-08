<?php

namespace WpService\Contracts;

interface AddCssclass
{
    /**
 * Adds a CSS class to a string.
 *
 * @since 2.7.0
 *
 * @param string $classToAdd The CSS class to add.
 * @param string $classes      The string to add the CSS class to.
 * @return string The string with the CSS class added.
 */
    public function addCssclass(string $classToAdd, string $classes): string;
}