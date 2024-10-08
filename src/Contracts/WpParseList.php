<?php

namespace WpService\Contracts;

interface WpParseList
{
    /**
     * Converts a comma- or space-separated list of scalar values to an array.
     *
     * @since 5.1.0
     *
     * @param array|string $inputList List of values.
     * @return array Array of values.
     */
    public function wpParseList(array|string $inputList): array;
}
