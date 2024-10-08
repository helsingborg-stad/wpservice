<?php

namespace WpService\Contracts;

interface BalanceTags
{
    /**
 * Balances tags if forced to, or if the 'use_balanceTags' option is set to true.
 *
 * @since 0.71
 *
 * @param string $text  Text to be balanced
 * @param bool $force If true, forces balancing, ignoring the value of the option. Default false.
 * @return string Balanced text
 */
    public function balanceTags(string $text, bool $force = false): string;
}
