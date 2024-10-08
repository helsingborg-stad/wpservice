<?php

namespace WpService\Contracts;

interface EscTextarea
{
    /**
 * Escaping for textarea values.
 *
 * @since 3.1.0
 *
 * @param string $text
 * @return string
 */
    public function escTextarea(string $text): string;
}
