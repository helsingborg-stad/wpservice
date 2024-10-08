<?php

namespace WpService\Contracts;

interface TagEscape
{
    /**
 * Escapes an HTML tag name.
 *
 * @since 2.5.0
 * @since 6.5.5 Allow hyphens in tag names (i.e. custom elements).
 *
 * @param string $tagName
 * @return string
 */
    public function tagEscape(string $tagName): string;
}
