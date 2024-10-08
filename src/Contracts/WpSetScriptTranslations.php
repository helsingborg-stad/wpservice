<?php

namespace WpService\Contracts;

interface WpSetScriptTranslations
{
    /**
     * Sets translated strings for a script.
     *
     * Works only if the script has already been registered.
     *
     * @see WP_Scripts::set_translations()
     * @since 5.0.0
     * @since 5.1.0 The `$domain` parameter was made optional.
     *
     * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
     *
     * @param string $handle Script handle the textdomain will be attached to.
     * @param string $domain Optional. Text domain. Default 'default'.
     * @param string $path   Optional. The full file path to the directory containing translation files.
     * @return bool True if the text domain was successfully localized, false otherwise.
     */
    public function wpSetScriptTranslations(string $handle, string $domain = 'default', string $path = ''): bool;
}
