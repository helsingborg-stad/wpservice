<?php

namespace WpService\Contracts;

interface ConvertChars
{
    /**
 * Converts lone & characters into `&#038;` (a.k.a. `&amp;`)
 *
 * @since 0.71
 *
 * @param string $content    String of characters to be converted.
 * @param string $deprecated Not used.
 * @return string Converted string.
 */
    public function convertChars(string $content, string $deprecated): string;
}
