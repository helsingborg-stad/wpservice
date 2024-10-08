<?php

namespace WpService\Contracts;

interface MakeClickable
{
    /**
     * Converts plaintext URI to HTML links.
     *
     * Converts URI, www and ftp, and email addresses. Finishes by fixing links
     * within links.
     *
     * @since 0.71
     *
     * @param string $text Content to convert URIs.
     * @return string Content with converted URIs.
     */
    public function makeClickable(string $text): string;
}
