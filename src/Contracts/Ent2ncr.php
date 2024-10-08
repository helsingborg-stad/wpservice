<?php

namespace WpService\Contracts;

interface Ent2ncr
{
    /**
 * Converts named entities into numbered entities.
 *
 * @since 1.5.1
 *
 * @param string $text The text within which entities will be converted.
 * @return string Text with converted entities.
 */
    public function ent2ncr(string $text): string;
}
