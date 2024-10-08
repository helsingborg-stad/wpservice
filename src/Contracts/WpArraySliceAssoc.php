<?php

namespace WpService\Contracts;

interface WpArraySliceAssoc
{
    /**
     * Extracts a slice of an array, given a list of keys.
     *
     * @since 3.1.0
     *
     * @param array $inputArray The original array.
     * @param array $keys        The list of keys.
     * @return array The array slice.
     */
    public function wpArraySliceAssoc(array $inputArray, array $keys): array;
}
