<?php

namespace WpService\Contracts;

interface Backslashit
{
    /**
     * Adds backslashes before letters and before a number at the start of a string.
     *
     * @since 0.71
     *
     * @param string $value Value to which backslashes will be added.
     * @return string String with backslashes inserted.
     */
    public function backslashit(string $value): string;
}
