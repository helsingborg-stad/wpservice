<?php

namespace WpService\Contracts;

interface EscHtmlE
{
    /**
 * Displays translated text that has been escaped for safe use in HTML output.
 *
 * If there is no translation, or the text domain isn't loaded, the original text
 * is escaped and displayed.
 *
 * If you need the value for use in PHP, use esc_html__().
 *
 * @since 2.8.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 */
    public function escHtmlE(string $text, string $domain): void;
}
