<?php

namespace WpService\Contracts;

interface AddMagicQuotes
{
/**
 * Walks the array while sanitizing the contents.
 *
 * @since 0.71
 * @since 5.5.0 Non-string values are left untouched.
 *
 * @param array $inputArray Array to walk while sanitizing contents.
 * @return array Sanitized $input_array.
 */
    public function addMagicQuotes(array $inputArray): array;
}
