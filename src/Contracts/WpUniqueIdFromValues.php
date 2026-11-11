<?php

namespace WpService\Contracts;

interface WpUniqueIdFromValues
{
/**
 * Generates a unique ID based on the structure and values of a given array.
 *
 * This function serializes the array into a JSON string and generates a hash
 * that serves as a unique identifier. Optionally, a prefix can be added to
 * the generated ID for context or categorization.
 *
 * @since 6.8.0
 *
 * @param array $data   The input array to generate an ID from.
 * @param string $prefix Optional. A prefix to prepend to the generated ID. Default empty string.
 * @return string The generated unique ID for the array.
 */
    public function wpUniqueIdFromValues(array $data, string $prefix = ''): string;
}
