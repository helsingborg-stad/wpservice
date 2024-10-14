<?php

namespace WpService\Contracts;

interface WpSpacesRegexp
{
/**
 * Returns the regexp for common whitespace characters.
 *
 * By default, spaces include new lines, tabs, nbsp entities, and the UTF-8 nbsp.
 * This is designed to replace the PCRE \s sequence. In ticket #22692, that
 * sequence was found to be unreliable due to random inclusion of the A0 byte.
 *
 * @since 4.0.0
 *
 * @return string The spaces regexp.
 */
    public function wpSpacesRegexp(): string;
}
