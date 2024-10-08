<?php

namespace WpService\Contracts;

interface SanitizeOption
{
    /**
 * Sanitizes various option values based on the nature of the option.
 *
 * This is basically a switch statement which will pass $value through a number
 * of functions depending on the $option.
 *
 * @since 2.0.5
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $option The name of the option.
 * @param mixed $value  The unsanitized value.
 * @return mixed Sanitized value.
 */
    public function sanitizeOption(string $option, mixed $value): mixed;
}
