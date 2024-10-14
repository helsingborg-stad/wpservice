<?php

namespace WpService\Contracts;

interface EscHtml__
{
/**
 * Retrieves the translation of $text and escapes it for safe use in HTML output.
 *
 * If there is no translation, or the text domain isn't loaded, the original text
 * is escaped and returned.
 *
 * @since 2.8.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 * @return string Translated text.
 */
    public function escHtml__(string $text, string $domain = 'default'): string;
}
