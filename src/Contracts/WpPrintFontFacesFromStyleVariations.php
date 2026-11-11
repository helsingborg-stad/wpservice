<?php

namespace WpService\Contracts;

interface WpPrintFontFacesFromStyleVariations
{
/**
 * Generates and prints font-face styles defined the the theme style variations.
 *
 * @since 6.7.0
 *
 */
    public function wpPrintFontFacesFromStyleVariations(): void;
}
