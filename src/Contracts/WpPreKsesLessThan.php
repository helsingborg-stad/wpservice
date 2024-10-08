<?php

namespace WpService\Contracts;

interface WpPreKsesLessThan
{
    /**
     * Converts lone less than signs.
     *
     * KSES already converts lone greater than signs.
     *
     * @since 2.3.0
     *
     * @param string $content Text to be converted.
     * @return string Converted text.
     */
    public function wpPreKsesLessThan(string $content): string;
}
