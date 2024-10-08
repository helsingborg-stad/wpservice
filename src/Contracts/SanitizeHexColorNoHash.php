<?php

namespace WpService\Contracts;

interface SanitizeHexColorNoHash
{
    /**
     * Sanitizes a hex color without a hash. Use sanitize_hex_color() when possible.
     *
     * Saving hex colors without a hash puts the burden of adding the hash on the
     * UI, which makes it difficult to use or upgrade to other color types such as
     * rgba, hsl, rgb, and HTML color names.
     *
     * Returns either '', a 3 or 6 digit hex color (without a #), or null.
     *
     * @since 3.4.0
     *
     * @param string $color
     * @return string|null
     */
    public function sanitizeHexColorNoHash(string $color): string|null;
}
