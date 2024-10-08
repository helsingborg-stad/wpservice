<?php

namespace WpService\Contracts;

interface WpFuzzyNumberMatch
{
    /**
 * Checks if two numbers are nearly the same.
 *
 * This is similar to using `round()` but the precision is more fine-grained.
 *
 * @since 5.3.0
 *
 * @param int|float $expected  The expected value.
 * @param int|float $actual    The actual number.
 * @param int|float $precision Optional. The allowed variation. Default 1.
 * @return bool Whether the numbers match within the specified precision.
 */
    public function wpFuzzyNumberMatch(int|float $expected, int|float $actual, int|float $precision): bool;
}
