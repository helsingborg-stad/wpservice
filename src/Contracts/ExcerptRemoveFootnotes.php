<?php

namespace WpService\Contracts;

interface ExcerptRemoveFootnotes
{
    /**
 * Parses footnotes markup out of a content string,
 * and renders those appropriate for the excerpt.
 *
 * @since 6.3.0
 *
 * @param string $content The content to parse.
 * @return string The parsed and filtered content.
 */
    public function excerptRemoveFootnotes(string $content): string;
}
