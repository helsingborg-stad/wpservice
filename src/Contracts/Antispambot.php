<?php

namespace WpService\Contracts;

interface Antispambot
{
    /**
     * Converts email addresses characters to HTML entities to block spam bots.
     *
     * @since 0.71
     *
     * @param string $emailAddress Email address.
     * @param int $hexEncoding  Optional. Set to 1 to enable hex encoding.
     * @return string Converted email address.
     */
    public function antispambot(string $emailAddress, int $hexEncoding = 0): string;
}
