<?php

namespace WpService\Contracts;

interface RemoveAllShortcodes
{
    /**
     * Clears all shortcodes.
     *
     * This function clears all of the shortcode tags by replacing the shortcodes global with
     * an empty array. This is actually an efficient method for removing all shortcodes.
     *
     * @since 2.5.0
     *
     * @global array $shortcode_tags
     */
    public function removeAllShortcodes(): void;
}
