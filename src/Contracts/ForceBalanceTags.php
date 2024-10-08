<?php

namespace WpService\Contracts;

interface ForceBalanceTags
{
    /**
     * Balances tags of string using a modified stack.
     *
     * @since 2.0.4
     * @since 5.3.0 Improve accuracy and add support for custom element tags.
     *
     * @author Leonard Lin <leonard@acm.org>
     * @license GPL
     * @copyright November 4, 2001
     * @version 1.1
     * @todo Make better - change loop condition to $text in 1.2
     * @internal Modified by Scott Reilly (coffee2code) 02 Aug 2004
     *      1.1  Fixed handling of append/stack pop order of end text
     *           Added Cleaning Hooks
     *      1.0  First Version
     *
     * @param string $text Text to be balanced.
     * @return string Balanced text.
     */
    public function forceBalanceTags(string $text): string;
}
