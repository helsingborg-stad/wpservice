<?php

namespace WpService\Contracts;

interface WpDownloadLanguagePack
{
    /**
 * Download a language pack.
 *
 * @since 4.0.0
 *
 * @see wp_get_available_translations()
 *
 * @param string $download Language code to download.
 * @return string|false Returns the language code if successfully downloaded
 *                      (or already installed), or false on failure.
 */
    public function wpDownloadLanguagePack(string $download): string|false;
}
