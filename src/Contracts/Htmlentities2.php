<?php

namespace WpService\Contracts;

interface Htmlentities2
{
    /**
 * Converts entities, while preserving already-encoded entities.
 *
 * @link https://www.php.net/htmlentities Borrowed from the PHP Manual user notes.
 *
 * @since 1.2.2
 *
 * @param string $text The text to be converted.
 * @return string Converted text.
 */
    public function htmlentities2(string $text): string;
}
