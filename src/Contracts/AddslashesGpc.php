<?php

namespace WpService\Contracts;

interface AddslashesGpc
{
/**
 * Adds slashes to a string or recursively adds slashes to strings within an array.
 *
 * @since 0.71
 *
 * @param string|array $gpc String or array of data to slash.
 * @return string|array Slashed `$gpc`.
 */
    public function addslashesGpc(string|array $gpc): string|array;
}
