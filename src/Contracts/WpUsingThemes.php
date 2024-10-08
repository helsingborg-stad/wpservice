<?php

namespace WpService\Contracts;

interface WpUsingThemes
{
    /**
 * Determines whether the current request should use themes.
 *
 * @since 5.1.0
 *
 * @return bool True if themes should be used, false otherwise.
 */
    public function wpUsingThemes(): bool;
}
