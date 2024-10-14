<?php

namespace WpService\Contracts;

interface EscAttrE
{
/**
 * Displays translated text that has been escaped for safe use in an attribute.
 *
 * Encodes `< > & " '` (less than, greater than, ampersand, double quote, single quote).
 * Will never double encode entities.
 *
 * If you need the value for use in PHP, use esc_attr__().
 *
 * @since 2.8.0
 *
 * @param string $text   Text to translate.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 */
    public function escAttrE(string $text, string $domain = 'default'): void;
}
