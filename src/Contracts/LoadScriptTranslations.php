<?php

namespace WpService\Contracts;

interface LoadScriptTranslations
{
/**
 * Loads the translation data for the given script handle and text domain.
 *
 * @since 5.0.2
 *
 * @param string|false $file   Path to the translation file to load. False if there isn't one.
 * @param string $handle Name of the script to register a translation domain to.
 * @param string $domain The text domain.
 * @return string|false The JSON-encoded translated strings for the given script handle and text domain.
 *                      False if there are none.
 */
    public function loadScriptTranslations(string|false $file, string $handle, string $domain): string|false;
}
