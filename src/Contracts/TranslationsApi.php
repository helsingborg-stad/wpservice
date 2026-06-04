<?php

namespace WpService\Contracts;

interface TranslationsApi
{
/**
 * Retrieve translations from WordPress Translation API.
 *
 * @since 4.0.0
 *
 * @param string $type Type of translations. Accepts 'plugins', 'themes', 'core'.
 * @param array|object $args Translation API arguments. Optional.
 * @return array|\WP_Error {
 *     On success an associative array of translations, WP_Error on failure.
 *
 * @type array $translations {
 *         List of translations, each an array of data.
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
 *         }
 *     }
 * }
 */
    public function translationsApi(string $type, array|object|null $args = null): array|\WP_Error;
}
