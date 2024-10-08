<?php

namespace WpService\Contracts;

interface ApplyShortcodes
{
    /**
     * Searches content for shortcodes and filter shortcodes through their hooks.
     *
     * This function is an alias for do_shortcode().
     *
     * @since 5.4.0
     *
     * @see do_shortcode()
     *
     * @param string $content     Content to search for shortcodes.
     * @param bool $ignoreHtml When true, shortcodes inside HTML elements will be skipped.
     *                            Default false.
     * @return string Content with shortcodes filtered out.
     */
    public function applyShortcodes(string $content, bool $ignoreHtml = false): string;
}
