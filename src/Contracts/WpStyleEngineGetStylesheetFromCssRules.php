<?php

namespace WpService\Contracts;

interface WpStyleEngineGetStylesheetFromCssRules
{
    /**
 * Returns compiled CSS from a collection of selectors and declarations.
 * Useful for returning a compiled stylesheet from any collection of CSS selector + declarations.
 *
 * Example usage:
 *
 *     $css_rules = array(
 *         array(
 *             'selector'     => '.elephant-are-cool',
 *             'declarations' => array(
 *                 'color' => 'gray',
 *                 'width' => '3em',
 *             ),
 *         ),
 *     );
 *
 *     $css = wp_style_engine_get_stylesheet_from_css_rules( $css_rules );
 *
 * Returns:
 *
 *     .elephant-are-cool{color:gray;width:3em}
 *
 * @since 6.1.0
 * @since 6.6.0 Added support for `$rules_group` in the `$css_rules` array.
 *
 * @param array $cssRules {
 *     Required. A collection of CSS rules.
 *
 *     @type array ...$0 {
 *         @type string   $rules_group  A parent CSS selector in the case of nested CSS,
 *                                      or a CSS nested @rule, such as `@media (min-width: 80rem)` or `@layer module`.
 *         @type string   $selector     A CSS selector.
 *         @type string[] $declarations An associative array of CSS definitions,
 *                                      e.g. `array( "$property" => "$value", "$property" => "$value" )`.
 *     }
 * }
 * @param array $options {
 *     Optional. An array of options. Default empty array.
 *
 *     @type string|null $context  An identifier describing the origin of the style object,
 *                                 e.g. 'block-supports' or 'global-styles'. Default 'block-supports'.
 *                                 When set, the style engine will attempt to store the CSS rules.
 *     @type bool        $optimize Whether to optimize the CSS output, e.g. combine rules.
 *                                 Default false.
 *     @type bool        $prettify Whether to add new lines and indents to output.
 *                                 Defaults to whether the `SCRIPT_DEBUG` constant is defined.
 * }
 * @return string A string of compiled CSS declarations, or empty string.
 */
public function wpStyleEngineGetStylesheetFromCssRules(array $cssRules, array $options = []): string;
}
