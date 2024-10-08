<?php

namespace WpService\Contracts;

interface RestValidateArrayContainsUniqueItems
{
    /**
 * Checks if an array is made up of unique items.
 *
 * @since 5.5.0
 *
 * @param array $inputArray The array to check.
 * @return bool True if the array contains unique items, false otherwise.
 */
    public function restValidateArrayContainsUniqueItems(array $inputArray): bool;
}
