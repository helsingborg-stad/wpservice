<?php

namespace WpService\Contracts;

interface WpGetCustomCss
{
    /**
 * Fetches the saved Custom CSS content for rendering.
 *
 * @since 4.7.0
 *
 * @param string $stylesheet Optional. A theme object stylesheet name. Defaults to the active theme.
 * @return string The Custom CSS Post content.
 */
    public function wpGetCustomCss(string $stylesheet): string;
}