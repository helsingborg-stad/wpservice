<?php

namespace WpService\Contracts;

interface WpHtmlSplit
{
/**
 * Separates HTML elements and comments from the text.
 *
 * @since 4.2.4
 *
 * @param string $input The text which has to be formatted.
 * @return string[] Array of the formatted text.
 */
    public function wpHtmlSplit(string $input): array;
}
