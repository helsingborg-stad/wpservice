<?php

namespace WpService\Contracts;

interface WpRequiredFieldIndicator
{
/**
 * Assigns a visual indicator for required form fields.
 *
 * @since 6.1.0
 *
 * @return string Indicator glyph wrapped in a `span` tag.
 */
    public function wpRequiredFieldIndicator(): string;
}
