<?php

namespace WpService\Contracts;

interface __
{
/**
 * Retrieves the translation of $text.
 *
 * If there is no translation, or the text domain isn't loaded, the original text is returned.
 *
 * @since 2.1.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 * @return string Translated text.
 */
    public function __(string $text, string $domain = 'default'): string;
}
