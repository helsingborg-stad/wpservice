<?php

namespace WpService\Contracts;

interface ShortcodeUnautop
{
/**
 * Don't auto-p wrap shortcodes that stand alone.
 *
 * Ensures that shortcodes are not wrapped in `<p>...</p>`.
 *
 * @since 2.9.0
 *
 * @global array $shortcode_tags
 *
 * @param string $text The content.
 * @return string The filtered content.
 */
    public function shortcodeUnautop(string $text): string;
}
