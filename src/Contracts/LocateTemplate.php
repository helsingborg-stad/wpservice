<?php

namespace WpService\Contracts;

interface LocateTemplate
{
    /**
 * Retrieves the name of the highest priority template file that exists.
 *
 * Searches in the stylesheet directory before the template directory and
 * wp-includes/theme-compat so that themes which inherit from a parent theme
 * can just overload one file.
 *
 * @since 2.7.0
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @global string $wp_stylesheet_path Path to current theme's stylesheet directory.
 * @global string $wp_template_path   Path to current theme's template directory.
 *
 * @param string|array $templateNames Template file(s) to search for, in order.
 * @param bool $load           If true the template file will be loaded if it is found.
 * @param bool $loadOnce      Whether to require_once or require. Has no effect if `$load` is false.
 *                                     Default true.
 * @param array $args           Optional. Additional arguments passed to the template.
 *                                     Default empty array.
 * @return string The template filename if one is located.
 */
    public function locateTemplate(string|array $templateNames, bool $load = false, bool $loadOnce = true, array $args = []): string;
}
