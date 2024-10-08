<?php

namespace WpService\Contracts;

interface WpRecursiveKsort
{
    /**
 * Sorts the keys of an array alphabetically.
 *
 * The array is passed by reference so it doesn't get returned
 * which mimics the behavior of `ksort()`.
 *
 * @since 6.0.0
 *
 * @param array $inputArray The array to sort, passed by reference.
 */
    public function wpRecursiveKsort(array $inputArray): void;
}
