<?php

namespace WpService\Contracts;

interface WpParseArgs
{
    /**
 * Merges user defined arguments into defaults array.
 *
 * This function is used throughout WordPress to allow for both string or array
 * to be merged into another array.
 *
 * @since 2.2.0
 * @since 2.3.0 `$args` can now also be an object.
 *
 * @param string|array|object $args     Value to merge with $defaults.
 * @param array $defaults Optional. Array that serves as the defaults.
 *                                      Default empty array.
 * @return array Merged user defined values with defaults.
 */
    public function wpParseArgs(string|array|object $args, array $defaults): array;
}
