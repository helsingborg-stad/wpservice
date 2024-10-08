<?php

namespace WpService\Contracts;

interface UrlShorten
{
    /**
 * Shortens a URL, to be used as link text.
 *
 * @since 1.2.0
 * @since 4.4.0 Moved to wp-includes/formatting.php from wp-admin/includes/misc.php and added $length param.
 *
 * @param string $url    URL to shorten.
 * @param int $length Optional. Maximum length of the shortened URL. Default 35 characters.
 * @return string Shortened URL.
 */
    public function urlShorten(string $url, int $length): string;
}
