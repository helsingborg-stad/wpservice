<?php

namespace WpService\Contracts;

interface WpMakeLinkRelative
{
    /**
     * Converts full URL paths to absolute paths.
     *
     * Removes the http or https protocols and the domain. Keeps the path '/' at the
     * beginning, so it isn't a true relative link, but from the web root base.
     *
     * @since 2.1.0
     * @since 4.1.0 Support was added for relative URLs.
     *
     * @param string $link Full URL path.
     * @return string Absolute path.
     */
    public function wpMakeLinkRelative(string $link): string;
}
