<?php

namespace WpService\Contracts;

interface Disabled
{
    /**
 * Outputs the HTML disabled attribute.
 *
 * Compares the first two arguments and if identical marks as disabled.
 *
 * @since 3.0.0
 *
 * @param mixed $disabled One of the values to compare.
 * @param mixed $current  Optional. The other value to compare if not just true.
 *                        Default true.
 * @param bool $display  Optional. Whether to echo or just return the string.
 *                        Default true.
 * @return string HTML attribute or empty string.
 */
    public function disabled(mixed $disabled, mixed $current = true, bool $display = true): string;
}
