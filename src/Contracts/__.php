<?php

namespace WpService\Contracts;

/**
 * The __ interface.
 *
 * This interface defines a method for translating text strings.
 */
interface __ // phpcs:ignore
{
    /**
     * Translate a text string.
     *
     * @param string $text The text string to be translated.
     * @param string $domain The text domain to use for the translation. Default is 'default'.
     * @return string The translated text string.
     */
    public function __($text, $domain = 'default'): string; // phpcs:ignore
}
