<?php

namespace WpService\Contracts;

interface WpExifFrac2dec
{
    /**
     * Converts a fraction string to a decimal.
     *
     * @since 2.5.0
     *
     * @param string $str Fraction string.
     * @return int|float Returns calculated fraction or integer 0 on invalid input.
     */
    public function wpExifFrac2dec(string $str): int|float;
}
