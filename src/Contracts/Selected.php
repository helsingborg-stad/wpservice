<?php

namespace WpService\Contracts;

interface Selected
{
    /**
 * Outputs the HTML selected attribute.
 *
 * Compares the first two arguments and if identical marks as selected.
 *
 * @since 1.0.0
 *
 * @param mixed $selected One of the values to compare.
 * @param mixed $current  Optional. The other value to compare if not just true.
 *                        Default true.
 * @param bool $display  Optional. Whether to echo or just return the string.
 *                        Default true.
 * @return string HTML attribute or empty string.
 */
    public function selected(mixed $selected, mixed $current, bool $display): string;
}
