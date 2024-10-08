<?php

namespace WpService\Contracts;

interface Wpautop
{
    /**
 * Replaces double line breaks with paragraph elements.
 *
 * A group of regex replaces used to identify text formatted with newlines and
 * replace double line breaks with HTML paragraph tags. The remaining line breaks
 * after conversion become `<br />` tags, unless `$br` is set to '0' or 'false'.
 *
 * @since 0.71
 *
 * @param string $text The text which has to be formatted.
 * @param bool $br   Optional. If set, this will convert all remaining line breaks
 *                     after paragraphing. Line breaks within `<script>`, `<style>`,
 *                     and `<svg>` tags are not affected. Default true.
 * @return string Text which has been converted into correct paragraph tags.
 */
    public function wpautop(string $text, bool $br = true): string;
}
