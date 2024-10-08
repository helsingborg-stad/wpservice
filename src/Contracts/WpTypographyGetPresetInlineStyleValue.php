<?php

namespace WpService\Contracts;

interface WpTypographyGetPresetInlineStyleValue
{
    /**
     * Generates an inline style value for a typography feature e.g. text decoration,
     * text transform, and font style.
     *
     * Note: This function is for backwards compatibility.
     * * It is necessary to parse older blocks whose typography styles contain presets.
     * * It mostly replaces the deprecated `wp_typography_get_css_variable_inline_style()`,
     *   but skips compiling a CSS declaration as the style engine takes over this role.
     * @link https://github.com/wordpress/gutenberg/pull/27555
     *
     * @since 6.1.0
     *
     * @param string $styleValue  A raw style value for a single typography feature from a block's style attribute.
     * @param string $cssProperty Slug for the CSS property the inline style sets.
     * @return string A CSS inline style value.
     */
    public function wpTypographyGetPresetInlineStyleValue(string $styleValue, string $cssProperty): string;
}
