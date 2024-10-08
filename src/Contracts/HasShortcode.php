<?php

namespace WpService\Contracts;

interface HasShortcode
{
    /**
     * Determines whether the passed content contains the specified shortcode.
     *
     * @since 3.6.0
     *
     * @global array $shortcode_tags
     *
     * @param string $content Content to search for shortcodes.
     * @param string $tag     Shortcode tag to check.
     * @return bool Whether the passed content contains the given shortcode.
     */
    public function hasShortcode(string $content, string $tag): bool;
}
