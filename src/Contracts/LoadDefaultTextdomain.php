<?php

namespace WpService\Contracts;

interface LoadDefaultTextdomain
{
    /**
 * Loads default translated strings based on locale.
 *
 * Loads the .mo file in WP_LANG_DIR constant path from WordPress root.
 * The translated (.mo) file is named based on the locale.
 *
 * @see load_textdomain()
 *
 * @since 1.5.0
 *
 * @param string $locale Optional. Locale to load. Default is the value of get_locale().
 * @return bool Whether the textdomain was loaded.
 */
    public function loadDefaultTextdomain(string $locale): bool;
}
