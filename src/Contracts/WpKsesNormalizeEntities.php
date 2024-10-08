<?php

namespace WpService\Contracts;

interface WpKsesNormalizeEntities
{
    /**
 * Converts and fixes HTML entities.
 *
 * This function normalizes HTML entities. It will convert `AT&T` to the correct
 * `AT&amp;T`, `&#00058;` to `&#058;`, `&#XYZZY;` to `&amp;#XYZZY;` and so on.
 *
 * When `$context` is set to 'xml', HTML entities are converted to their code points.  For
 * example, `AT&T&hellip;&#XYZZY;` is converted to `AT&amp;T…&amp;#XYZZY;`.
 *
 * @since 1.0.0
 * @since 5.5.0 Added `$context` parameter.
 *
 * @param string $content Content to normalize entities.
 * @param string $context Context for normalization. Can be either 'html' or 'xml'.
 *                        Default 'html'.
 * @return string Content with normalized entities.
 */
    public function wpKsesNormalizeEntities(string $content, string $context): string;
}
