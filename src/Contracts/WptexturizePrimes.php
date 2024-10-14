<?php

namespace WpService\Contracts;

interface WptexturizePrimes
{
/**
 * Implements a logic tree to determine whether or not "7'." represents seven feet,
 * then converts the special char into either a prime char or a closing quote char.
 *
 * @since 4.3.0
 *
 * @param string $haystack    The plain text to be searched.
 * @param string $needle      The character to search for such as ' or ".
 * @param string $prime       The prime char to use for replacement.
 * @param string $openQuote  The opening quote char. Opening quote replacement must be
 *                            accomplished already.
 * @param string $closeQuote The closing quote char to use for replacement.
 * @return string The $haystack value after primes and quotes replacements.
 */
    public function wptexturizePrimes(string $haystack, string $needle, string $prime, string $openQuote, string $closeQuote): string;
}
