<?php

namespace WpService\Contracts;

interface WpHtmlExcerpt
{
    /**
 * Safely extracts not more than the first $count characters from HTML string.
 *
 * UTF-8, tags and entities safe prefix extraction. Entities inside will *NOT*
 * be counted as one character. For example &amp; will be counted as 4, &lt; as
 * 3, etc.
 *
 * @since 2.5.0
 *
 * @param string $str   String to get the excerpt from.
 * @param int $count Maximum number of characters to take.
 * @param string $more  Optional. What to append if $str needs to be trimmed. Defaults to empty string.
 * @return string The excerpt.
 */
    public function wpHtmlExcerpt(string $str, int $count, string $more = null): string;
}
