<?php

namespace WpService\Contracts;

interface StripShortcodes
{
/**
 * Removes all shortcode tags from the given content.
 *
 * @since 2.5.0
 *
 * @global array $shortcode_tags
 *
 * @param string $content Content to remove shortcode tags.
 * @return string Content without shortcode tags.
 */
    public function stripShortcodes(string $content): string;
}
