<?php

namespace WpService\Contracts;

interface EscXml
{
/**
 * Escaping for XML blocks.
 *
 * @since 5.5.0
 *
 * @param string $text Text to escape.
 * @return string Escaped text.
 */
    public function escXml(string $text): string;
}
