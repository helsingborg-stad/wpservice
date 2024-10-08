<?php

namespace WpService\Contracts;

interface LoadScriptTextdomain
{
    /**
     * Loads the script translated strings.
     *
     * @since 5.0.0
     * @since 5.0.2 Uses load_script_translations() to load translation data.
     * @since 5.1.0 The `$domain` parameter was made optional.
     *
     * @see WP_Scripts::set_translations()
     *
     * @param string $handle Name of the script to register a translation domain to.
     * @param string $domain Optional. Text domain. Default 'default'.
     * @param string $path   Optional. The full file path to the directory containing translation files.
     * @return string|false The translated strings in JSON encoding on success,
     *                      false if the script textdomain could not be loaded.
     */
    public function loadScriptTextdomain(string $handle, string $domain = 'default', string $path = ''): string|false;
}
