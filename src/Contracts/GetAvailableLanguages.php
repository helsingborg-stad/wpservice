<?php

namespace WpService\Contracts;

interface GetAvailableLanguages
{
/**
 * Gets all available languages based on the presence of *.mo and *.l10n.php files in a given directory.
 *
 * The default directory is WP_LANG_DIR.
 *
 * @since 3.0.0
 * @since 4.7.0 The results are now filterable with the {@see 'get_available_languages'} filter.
 * @since 6.5.0 The initial file list is now cached and also takes into account *.l10n.php files.
 *
 * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
 *
 * @param string $dir A directory to search for language files.
 *                    Default WP_LANG_DIR.
 * @return string[] An array of language codes or an empty array if no languages are present.
 *                  Language codes are formed by stripping the file extension from the language file names.
 */
    public function getAvailableLanguages(string $dir = null): array;
}
