<?php

namespace WpService\Contracts;

interface WpParseStr
{
    /**
     * Parses a string into variables to be stored in an array.
     *
     * @since 2.2.1
     *
     * @param string $inputString The string to be parsed.
     * @param array $result       Variables will be stored in this array.
     */
    public function wpParseStr(string $inputString, array $result): void;
}
