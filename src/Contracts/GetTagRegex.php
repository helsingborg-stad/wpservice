<?php

namespace WpService\Contracts;

interface GetTagRegex
{
    /**
     * Returns RegEx body to liberally match an opening HTML tag.
     *
     * Matches an opening HTML tag that:
     * 1. Is self-closing or
     * 2. Has no body but has a closing tag of the same name or
     * 3. Contains a body and a closing tag of the same name
     *
     * Note: this RegEx does not balance inner tags and does not attempt
     * to produce valid HTML
     *
     * @since 3.6.0
     *
     * @param string $tag An HTML tag name. Example: 'video'.
     * @return string Tag RegEx.
     */
    public function getTagRegex(string $tag): string;
}
