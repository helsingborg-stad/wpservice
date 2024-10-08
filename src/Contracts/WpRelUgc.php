<?php

namespace WpService\Contracts;

interface WpRelUgc
{
    /**
 * Adds `rel="nofollow ugc"` string to all HTML A elements in content.
 *
 * @since 5.3.0
 *
 * @param string $text Content that may contain HTML A elements.
 * @return string Converted content.
 */
    public function wpRelUgc(string $text): string;
}
