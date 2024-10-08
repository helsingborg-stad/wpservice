<?php

namespace WpService\Contracts;

interface DoShortcodesInHtmlTags
{
    /**
     * Searches only inside HTML elements for shortcodes and process them.
     *
     * Any [ or ] characters remaining inside elements will be HTML encoded
     * to prevent interference with shortcodes that are outside the elements.
     * Assumes $content processed by KSES already.  Users with unfiltered_html
     * capability may get unexpected output if angle braces are nested in tags.
     *
     * @since 4.2.3
     *
     * @param string $content     Content to search for shortcodes.
     * @param bool $ignoreHtml When true, all square braces inside elements will be encoded.
     * @param array $tagnames    List of shortcodes to find.
     * @return string Content with shortcodes filtered out.
     */
    public function doShortcodesInHtmlTags(string $content, bool $ignoreHtml, array $tagnames): string;
}
