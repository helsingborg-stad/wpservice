<?php

namespace WpService\Contracts;

interface GetUrlInContent
{
    /**
     * Extracts and returns the first URL from passed content.
     *
     * @since 3.6.0
     *
     * @param string $content A string which might contain a URL.
     * @return string|false The found URL.
     */
    public function getUrlInContent(string $content): string|false;
}
