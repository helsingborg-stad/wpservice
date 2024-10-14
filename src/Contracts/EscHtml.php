<?php

namespace WpService\Contracts;

interface EscHtml
{
/**
 * Escaping for HTML blocks.
 *
 * @since 2.8.0
 *
 * @param string $text
 * @return string
 */
    public function escHtml(string $text): string;
}
