<?php

namespace WpService\Contracts;

interface SanitizeHexColor
{
    /**
 * Sanitizes a hex color.
 *
 * Returns either '', a 3 or 6 digit hex color (with #), or nothing.
 * For sanitizing values without a #, see sanitize_hex_color_no_hash().
 *
 * @since 3.4.0
 *
 * @param string $color
 * @return string|void
 */
    public function sanitizeHexColor(string $color): string;
}
