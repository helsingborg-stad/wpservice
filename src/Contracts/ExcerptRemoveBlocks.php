<?php

namespace WpService\Contracts;

interface ExcerptRemoveBlocks
{
    /**
 * Parses blocks out of a content string, and renders those appropriate for the excerpt.
 *
 * As the excerpt should be a small string of text relevant to the full post content,
 * this function renders the blocks that are most likely to contain such text.
 *
 * @since 5.0.0
 *
 * @param string $content The content to parse.
 * @return string The parsed and filtered content.
 */
    public function excerptRemoveBlocks(string $content): string;
}
