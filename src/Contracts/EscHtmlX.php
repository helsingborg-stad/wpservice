<?php

namespace WpService\Contracts;

interface EscHtmlX
{
    /**
     * Translates string with gettext context, and escapes it for safe use in HTML output.
     *
     * If there is no translation, or the text domain isn't loaded, the original text
     * is escaped and returned.
     *
     * @since 2.9.0
     *
     * @param string $text    Text to translate.
     * @param string $context Context information for the translators.
     * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
     *                        Default 'default'.
     * @return string Translated text.
     */
    public function escHtmlX(string $text, string $context, string $domain = 'default'): string;
}
