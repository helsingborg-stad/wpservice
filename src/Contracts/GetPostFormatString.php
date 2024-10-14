<?php

namespace WpService\Contracts;

interface GetPostFormatString
{
/**
 * Returns a pretty, translated version of a post format slug
 *
 * @since 3.1.0
 *
 * @param string $slug A post format slug.
 * @return string The translated post format name.
 */
    public function getPostFormatString(string $slug): string;
}
