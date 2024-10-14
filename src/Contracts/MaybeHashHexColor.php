<?php

namespace WpService\Contracts;

interface MaybeHashHexColor
{
/**
 * Ensures that any hex color is properly hashed.
 * Otherwise, returns value untouched.
 *
 * This method should only be necessary if using sanitize_hex_color_no_hash().
 *
 * @since 3.4.0
 *
 * @param string $color
 * @return string
 */
    public function maybeHashHexColor(string $color): string;
}
