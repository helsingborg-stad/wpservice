<?php

namespace WpService\Contracts;

interface WpLoadClassicThemeBlockStylesOnDemand
{
/**
 * Adds hooks to load block styles on demand in classic themes.
 *
 * @since 6.9.0
 *
 * @see _add_default_theme_supports()
 */
    public function wpLoadClassicThemeBlockStylesOnDemand(): void;
}
