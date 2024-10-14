<?php

namespace WpService\Contracts;

interface Translate
{
/**
 * Retrieves the translation of $text.
 *
 * If there is no translation, or the text domain isn't loaded, the original text is returned.
 *
 * *Note:* Don't use translate() directly, use __() or related functions.
 *
 * @since 2.2.0
 * @since 5.5.0 Introduced `gettext-{$domain}` filter.
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 * @return string Translated text.
 */
    public function translate(string $text, string $domain = 'default'): string;
}
