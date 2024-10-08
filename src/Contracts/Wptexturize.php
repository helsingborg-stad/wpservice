<?php

namespace WpService\Contracts;

interface Wptexturize
{
    /**
     * Replaces common plain text characters with formatted entities.
     *
     * Returns given text with transformations of quotes into smart quotes, apostrophes,
     * dashes, ellipses, the trademark symbol, and the multiplication symbol.
     *
     * As an example,
     *
     *     'cause today's effort makes it worth tomorrow's "holiday" ...
     *
     * Becomes:
     *
     *     &#8217;cause today&#8217;s effort makes it worth tomorrow&#8217;s &#8220;holiday&#8221; &#8230;
     *
     * Code within certain HTML blocks are skipped.
     *
     * Do not use this function before the {@see 'init'} action hook; everything will break.
     *
     * @since 0.71
     *
     * @global array $wp_cockneyreplace Array of formatted entities for certain common phrases.
     * @global array $shortcode_tags
     *
     * @param string $text  The text to be formatted.
     * @param bool $reset Set to true for unit testing. Translated patterns will reset.
     * @return string The string replaced with HTML entities.
     */
    public function wptexturize(string $text, bool $reset = false): string;
}
