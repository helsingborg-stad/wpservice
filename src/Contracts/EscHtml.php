<?php

namespace WpService\Contracts;

interface EscHtml
{
    /**
     * Escapes HTML entities in a string.
     *
     * @param string $text The input string.
     * @return string The escaped string.
     */
    public function escHtml(string $text): string;
}
