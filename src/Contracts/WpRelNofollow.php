<?php

namespace WpService\Contracts;

interface WpRelNofollow
{
    /**
     * Adds `rel="nofollow"` string to all HTML A elements in content.
     *
     * @since 1.5.0
     *
     * @param string $text Content that may contain HTML A elements.
     * @return string Converted content.
     */
    public function wpRelNofollow(string $text): string;
}
