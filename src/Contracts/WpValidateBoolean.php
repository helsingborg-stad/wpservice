<?php

namespace WpService\Contracts;

interface WpValidateBoolean
{
    /**
 * Filters/validates a variable as a boolean.
 *
 * Alternative to `filter_var( $value, FILTER_VALIDATE_BOOLEAN )`.
 *
 * @since 4.0.0
 *
 * @param mixed $value Boolean value to validate.
 * @return bool Whether the value is validated.
 */
    public function wpValidateBoolean(mixed $value): bool;
}
