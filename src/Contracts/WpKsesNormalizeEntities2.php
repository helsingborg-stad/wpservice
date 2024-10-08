<?php

namespace WpService\Contracts;

interface WpKsesNormalizeEntities2
{
    /**
 * Callback for `wp_kses_normalize_entities()` regular expression.
 *
 * This function helps `wp_kses_normalize_entities()` to only accept 16-bit
 * values and nothing more for `&#number;` entities.
 *
 * @access private
 * @ignore
 * @since 1.0.0
 *
 * @param array $matches `preg_replace_callback()` matches array.
 * @return string Correctly encoded entity.
 */
    public function wpKsesNormalizeEntities2(array $matches): string;
}
