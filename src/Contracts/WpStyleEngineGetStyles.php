<?php

namespace WpService\Contracts;

interface WpStyleEngineGetStyles
{
    /**
     * Global public interface method to generate styles from a single style object,
     * e.g. the value of a block's attributes.style object or the top level styles in theme.json.
     *
     * Example usage:
     *
     *     $styles = wp_style_engine_get_styles(
     *         array(
     *             'color' => array( 'text' => '#cccccc' ),
     *         )
     *     );
     *
     * Returns:
     *
     *     array(
     *         'css'          => 'color: #cccccc',
     *         'declarations' => array( 'color' => '#cccccc' ),
     *         'classnames'   => 'has-color',
     *     )
     *
     * @since 6.1.0
     *
     * @see https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#styles
     * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/
     *
     * @param array $blockStyles The style object.
     * @param array $options {
     *     Optional. An array of options. Default empty array.
     *
     * @type string|null $context                    An identifier describing the origin of the style object,
     *                                                   e.g. 'block-supports' or 'global-styles'. Default null.
     *                                                   When set, the style engine will attempt to store the CSS rules,
     *                                                   where a selector is also passed.
     * @type bool        $convert_vars_to_classnames Whether to skip converting incoming CSS var patterns,
     *                                                   e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`,
     *                                                   to `var( --wp--preset--* )` values. Default false.
     * @type string      $selector                   Optional. When a selector is passed,
     *                                                   the value of `$css` in the return value will comprise
     *                                                   a full CSS rule `$selector { ...$css_declarations }`,
     *                                                   otherwise, the value will be a concatenated string
     *                                                   of CSS declarations.
     * }
     * @return array {
     * @type string   $css          A CSS ruleset or declarations block
     *                                  formatted to be placed in an HTML `style` attribute or tag.
     * @type string[] $declarations An associative array of CSS definitions,
     *                                  e.g. `array( "$property" => "$value", "$property" => "$value" )`.
     * @type string   $classnames   Classnames separated by a space.
     * }
     */
    public function wpStyleEngineGetStyles(array $blockStyles, array $options = []): array;
}
