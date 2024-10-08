<?php

namespace WpService\Contracts;

interface WpCleanThemeJsonCache
{
    /**
 * Cleans the caches under the theme_json group.
 *
 * @since 6.2.0
 */
    public function wpCleanThemeJsonCache(): void;
}