<?php

namespace WpService\Contracts;

interface ShortcodeExists
{
/**
 * Determines whether a registered shortcode exists named $tag.
 *
 * @since 3.6.0
 *
 * @global array $shortcode_tags List of shortcode tags and their callback hooks.
 *
 * @param string $tag Shortcode tag to check.
 * @return bool Whether the given shortcode exists.
 */
    public function shortcodeExists(string $tag): bool;
}
