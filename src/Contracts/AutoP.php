<?php

namespace WpService\Contracts;

/**
 * The Autop interface defines the contract for classes that provide automatic paragraph formatting functionality.
 */
interface Autop
{
    /**
     * Formats the given text into paragraphs.
     *
     * @param string $text The text to be formatted.
     * @param bool $br Whether to use <br> tags instead of <p> tags for line breaks. Default is true.
     * @return string The formatted text.
     */
    public function autop(string $text, bool $br = true): string;
}