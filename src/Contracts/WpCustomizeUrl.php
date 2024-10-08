<?php

namespace WpService\Contracts;

interface WpCustomizeUrl
{
    /**
 * Returns a URL to load the Customizer.
 *
 * @since 3.4.0
 *
 * @param string $stylesheet Optional. Theme to customize. Defaults to active theme.
 *                           The theme's stylesheet will be urlencoded if necessary.
 * @return string
 */
    public function wpCustomizeUrl(string $stylesheet): string;
}
