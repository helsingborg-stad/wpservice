<?php

namespace WpService\Contracts;

interface NormalizeWhitespace
{
/**
 * Normalizes EOL characters and strips duplicate whitespace.
 *
 * @since 2.7.0
 *
 * @param string $str The string to normalize.
 * @return string The normalized string.
 */
    public function normalizeWhitespace(string $str): string;
}
