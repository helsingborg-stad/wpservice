<?php

namespace WpService\Contracts;

interface RestValidateBooleanValueFromSchema
{
    /**
 * Validates a boolean value based on a schema.
 *
 * @since 5.7.0
 *
 * @param mixed $value The value to validate.
 * @param string $param The parameter name, used in error messages.
 * @return true|\WP_Error
 */
    public function restValidateBooleanValueFromSchema(mixed $value, string $param): true|\WP_Error;
}
