<?php

namespace WpService\Contracts;

interface EscAttrX
{
/**
 * Translates string with gettext context, and escapes it for safe use in an attribute.
 *
 * If there is no translation, or the text domain isn't loaded, the original text
 * is escaped and returned.
 *
 * @since 2.8.0
 *
 * @param string $text    Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 *                        Default 'default'.
 * @return string Translated text.
 */
    public function escAttrX(string $text, string $context, string $domain = 'default'): string;
}
