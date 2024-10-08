<?php

namespace WpService\Contracts;

interface LoadTextdomain
{
    /**
 * Loads a .mo file into the text domain $domain.
 *
 * If the text domain already exists, the translations will be merged. If both
 * sets have the same string, the translation from the original value will be taken.
 *
 * On success, the .mo file will be placed in the $l10n global by $domain
 * and will be a MO object.
 *
 * @since 1.5.0
 * @since 6.1.0 Added the `$locale` parameter.
 *
 * @global MO[]                   $l10n                   An array of all currently loaded text domains.
 * @global MO[]                   $l10n_unloaded          An array of all text domains that have been unloaded again.
 * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @param string $mofile Path to the .mo file.
 * @param string $locale Optional. Locale. Default is the current locale.
 * @return bool True on success, false on failure.
 */
    public function loadTextdomain(string $domain, string $mofile, string $locale): bool;
}
