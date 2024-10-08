<?php

namespace WpService\Contracts;

interface RestParseHexColor
{
    /**
     * Parses a 3 or 6 digit hex color (with #).
     *
     * @since 5.4.0
     *
     * @param string $color 3 or 6 digit hex color (with #).
     * @return string|false Color value on success, false on failure.
     */
    public function restParseHexColor(string $color): string|false;
}
