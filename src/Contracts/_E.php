<?php

namespace WpService\Contracts;

interface _e
{
    /**
 * Displays translated text.
 *
 * @since 1.2.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 */
    public function _e(string $text, string $domain): void;
}
