<?php

namespace WpService\Contracts;

interface WpCheckInvalidUtf8
{
    /**
 * Checks for invalid UTF8 in a string.
 *
 * @since 2.8.0
 *
 * @param string $text   The text which is to be checked.
 * @param bool $strip  Optional. Whether to attempt to strip out invalid UTF8. Default false.
 * @return string The checked text.
 */
    public function wpCheckInvalidUtf8(string $text, bool $strip): string;
}
