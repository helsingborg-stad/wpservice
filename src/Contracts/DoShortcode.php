<?php

namespace WpService\Contracts;

interface DoShortcode
{
    /**
     * Searches content for shortcodes and filter shortcodes through their hooks.
     *
     * If there are no shortcode tags defined, then the content will be returned
     * without any filtering. This might cause issues when plugins are disabled but
     * the shortcode will still show up in the post or content.
     *
     * @since 2.5.0
     *
     * @global array $shortcode_tags List of shortcode tags and their callback hooks.
     *
     * @param string $content     Content to search for shortcodes.
     * @param bool $ignoreHtml When true, shortcodes inside HTML elements will be skipped.
     *                            Default false.
     * @return string Content with shortcodes filtered out.
     */
    public function doShortcode(string $content, bool $ignoreHtml = false): string;
}
