<?php

namespace WpService\Contracts;

interface GetExtended
{
    /**
     * Gets extended entry info (<!--more-->).
     *
     * There should not be any space after the second dash and before the word
     * 'more'. There can be text or space(s) after the word 'more', but won't be
     * referenced.
     *
     * The returned array has 'main', 'extended', and 'more_text' keys. Main has the text before
     * the `<!--more-->`. The 'extended' key has the content after the
     * `<!--more-->` comment. The 'more_text' key has the custom "Read More" text.
     *
     * @since 1.0.0
     *
     * @param string $post Post content.
     * @return string[] {
     *     Extended entry info.
     *
     * @type string $main      Content before the more tag.
     * @type string $extended  Content after the more tag.
     * @type string $more_text Custom read more text, or empty string.
     * }
     */
    public function getExtended(string $post): array;
}
