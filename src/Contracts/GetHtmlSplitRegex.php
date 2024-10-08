<?php

namespace WpService\Contracts;

interface GetHtmlSplitRegex
{
    /**
     * Retrieves the regular expression for an HTML element.
     *
     * @since 4.4.0
     *
     * @return string The regular expression
     */
    public function getHtmlSplitRegex(): string;
}
