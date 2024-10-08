<?php

namespace WpService\Contracts;

interface WpGetTypographyFontSizeValue
{
    /**
     * Returns a font-size value based on a given font-size preset.
     * Takes into account fluid typography parameters and attempts to return a CSS
     * formula depending on available, valid values.
     *
     * @since 6.1.0
     * @since 6.1.1 Adjusted rules for min and max font sizes.
     * @since 6.2.0 Added 'settings.typography.fluid.minFontSize' support.
     * @since 6.3.0 Using layout.wideSize as max viewport width, and logarithmic scale factor to calculate minimum font scale.
     * @since 6.4.0 Added configurable min and max viewport width values to the typography.fluid theme.json schema.
     * @since 6.6.0 Deprecated bool argument $should_use_fluid_typography.
     *
     * @param array $preset   {
     *     Required. fontSizes preset value as seen in theme.json.
     *
     * @type string           $name Name of the font size preset.
     * @type string           $slug Kebab-case, unique identifier for the font size preset.
     * @type string|int|float $size CSS font-size value, including units if applicable.
     * }
     * @param bool|array $settings Optional Theme JSON settings array that overrides any global theme settings.
     *                             Default is false.
     * @return string|null Font-size value or null if a size is not passed in $preset.
     */
    public function wpGetTypographyFontSizeValue(array $preset, bool|array $settings = []): string|null;
}
