<?php

namespace WpService\Contracts;

interface WpReadonly
{
/**
 * Outputs the HTML readonly attribute.
 *
 * Compares the first two arguments and if identical marks as readonly.
 *
 * @since 5.9.0
 *
 * @param mixed $readonlyValue One of the values to compare.
 * @param mixed $current        Optional. The other value to compare if not just true.
 *                              Default true.
 * @param bool $display        Optional. Whether to echo or just return the string.
 *                              Default true.
 * @return string HTML attribute or empty string.
 */
    public function wpReadonly(mixed $readonlyValue, mixed $current = true, bool $display = true): string;
}
