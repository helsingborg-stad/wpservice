<?php

namespace WpService\Contracts;

interface Checked
{
    /**
 * Outputs the HTML checked attribute.
 *
 * Compares the first two arguments and if identical marks as checked.
 *
 * @since 1.0.0
 *
 * @param mixed $checked One of the values to compare.
 * @param mixed $current Optional. The other value to compare if not just true.
 *                       Default true.
 * @param bool $display Optional. Whether to echo or just return the string.
 *                       Default true.
 * @return string HTML attribute or empty string.
 */
    public function checked(mixed $checked, mixed $current = true, bool $display = true): string;
}
