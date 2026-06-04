<?php

namespace WpService\Contracts;

interface GetUrlInContent
{
/**
 * Extracts and returns the first URL from passed content.
 *
 * @since 3.6.0
 *
 * @param string $content A string which might contain an `A` element with a non-empty `href` attribute.
 * @return string|false Database-escaped URL via {@see esc_url()} if found, otherwise `false`.
 */
    public function getUrlInContent(string $content): string|false;
}
