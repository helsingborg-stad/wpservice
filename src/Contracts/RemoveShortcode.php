<?php

namespace WpService\Contracts;

interface RemoveShortcode
{
/**
 * Removes hook for shortcode.
 *
 * @since 2.5.0
 *
 * @global array $shortcode_tags
 *
 * @param string $tag Shortcode tag to remove hook for.
 */
    public function removeShortcode(string $tag): void;
}
