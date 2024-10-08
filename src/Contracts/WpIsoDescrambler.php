<?php

namespace WpService\Contracts;

interface WpIsoDescrambler
{
    /**
     * Converts to ASCII from email subjects.
     *
     * @since 1.2.0
     *
     * @param string $subject Subject line.
     * @return string Converted string to ASCII.
     */
    public function wpIsoDescrambler(string $subject): string;
}
