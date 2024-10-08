<?php

namespace WpService\Contracts;

interface UnescapeInvalidShortcodes
{
    /**
 * Removes placeholders added by do_shortcodes_in_html_tags().
 *
 * @since 4.2.3
 *
 * @param string $content Content to search for placeholders.
 * @return string Content with placeholders removed.
 */
    public function unescapeInvalidShortcodes(string $content): string;
}
