<?php

namespace WpService\Contracts;

interface WpKsesPostDeep
{
    /**
     * Navigates through an array, object, or scalar, and sanitizes content for
     * allowed HTML tags for post content.
     *
     * @since 4.4.2
     *
     * @see map_deep()
     *
     * @param mixed $data The array, object, or scalar value to inspect.
     * @return mixed The filtered content.
     */
    public function wpKsesPostDeep(mixed $data): mixed;
}
