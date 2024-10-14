<?php

namespace WpService\Contracts;

interface WpRand
{
/**
 * Generates a random non-negative number.
 *
 * @since 2.6.2
 * @since 4.4.0 Uses PHP7 random_int() or the random_compat library if available.
 * @since 6.1.0 Returns zero instead of a random number if both `$min` and `$max` are zero.
 *
 * @global string $rnd_value
 *
 * @param int $min Optional. Lower limit for the generated number.
 *                 Accepts positive integers or zero. Defaults to 0.
 * @param int $max Optional. Upper limit for the generated number.
 *                 Accepts positive integers. Defaults to 4294967295.
 * @return int A random non-negative number between min and max.
 */
    public function wpRand(int $min = null, int $max = null): int;
}
