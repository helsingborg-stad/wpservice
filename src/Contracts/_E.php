<?php

namespace WpService\Contracts;

/**
 * Interface _E
 *
 * This interface defines the contract for the _e() method, which is used for translating and echoing a string.
 */
interface _E // phpcs:ignore
{
    /**
     * Translates and echoes a string.
     *
     * @param string $text The text to be translated and echoed.
     * @param string $domain The text domain. Default is 'default'.
     * @return void
     */
    public function _e($text, $domain = 'default'): void; // phpcs:ignore
}
