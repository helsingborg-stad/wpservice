<?php

namespace WpService\Contracts;

interface StripslashesFromStringsOnly
{
/**
 * Callback function for `stripslashes_deep()` which strips slashes from strings.
 *
 * @since 4.4.0
 *
 * @param mixed $value The array or string to be stripped.
 * @return mixed The stripped value.
 */
    public function stripslashesFromStringsOnly(mixed $value): mixed;
}
