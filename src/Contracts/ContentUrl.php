<?php

namespace WpService\Contracts;

interface ContentUrl
{
    /**
 * Retrieves the URL to the content directory.
 *
 * @since 2.6.0
 *
 * @param string $path Optional. Path relative to the content URL. Default empty.
 * @return string Content URL link with optional path appended.
 */
    public function contentUrl(string $path = ''): string;
}
