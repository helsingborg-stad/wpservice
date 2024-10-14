<?php

namespace WpService\Contracts;

interface WpEmbedExcerptMore
{
/**
 * Filters the string in the 'more' link displayed after a trimmed excerpt.
 *
 * Replaces '[...]' (appended to automatically generated excerpts) with an
 * ellipsis and a "Continue reading" link in the embed template.
 *
 * @since 4.4.0
 *
 * @param string $moreString Default 'more' string.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
    public function wpEmbedExcerptMore(string $moreString): string;
}
