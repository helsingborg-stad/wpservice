<?php

namespace WpService\Contracts;

interface WpGetAvailableTranslations
{
/**
 * Get available translations from the WordPress.org API.
 *
 * @since 4.0.0
 *
 * @see translations_api()
 *
 * @return array {
 *     Array of translations keyed by the language code, each an associative array of data.
 *     If the API response results in an error, an empty array will be returned.
 *
 * @type array ...$0 {
 * @type string   $language     Language code.
 * @type string   $version      WordPress version.
 * @type string   $updated      Date the translation was last updated, in MySQL datetime format.
 * @type string   $english_name English name of the language.
 * @type string   $native_name  Native name of the language.
 * @type string   $package      URL to download the translation package.
 * @type string[] $iso          Array of ISO language codes.
 * @type array    $strings      Array of translated strings used in the installation process.
 *     }
 * }
 */
    public function wpGetAvailableTranslations(): array;
}
