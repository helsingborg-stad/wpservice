<?php

namespace WpService\Contracts;

interface WpUnslash
{
    /**
     * Removes slashes from a string or recursively removes slashes from strings within an array.
     *
     * This should be used to remove slashes from data passed to core API that
     * expects data to be unslashed.
     *
     * @since 3.6.0
     *
     * @param string|array $value String or array of data to unslash.
     * @return string|array Unslashed `$value`, in the same type as supplied.
     */
    public function wpUnslash(string|array $value): string|array;
}
