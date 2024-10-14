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
 * @return array|\WP_Error On success an associative array of translations, WP_Error on failure.
 */
    public function translationsApi(string $type, array|object $args = null): array|\WP_Error;
}
