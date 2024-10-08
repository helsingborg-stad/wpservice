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
 * @return array[] Array of translations, each an array of data, keyed by the language. If the API response results
 *                 in an error, an empty array will be returned.
 */
    public function wpGetAvailableTranslations(): array;
}
