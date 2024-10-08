<?php

namespace WpService\Contracts;

interface WpIsBlockTheme
{
    /**
 * Returns whether the active theme is a block-based theme or not.
 *
 * @since 5.9.0
 *
 * @return bool Whether the active theme is a block-based theme or not.
 */
    public function wpIsBlockTheme(): bool;
}
