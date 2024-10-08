<?php

namespace WpService\Contracts;

interface WpJustInTimeScriptLocalization
{
    /**
 * Loads localized data on print rather than initialization.
 *
 * These localizations require information that may not be loaded even by init.
 *
 * @since 2.5.0
 *
 * @global array $shortcode_tags
 */
    public function wpJustInTimeScriptLocalization(): void;
}
