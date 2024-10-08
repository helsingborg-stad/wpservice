<?php

namespace WpService\Contracts;

interface RestValidateIntegerValueFromSchema
{
    /**
 * Validates an integer value based on a schema.
 *
 * @since 5.7.0
 *
 * @param mixed $value The value to validate.
 * @param array $args  Schema array to use for validation.
 * @param string $param The parameter name, used in error messages.
 * @return true|\WP_Error
 */
    public function restValidateIntegerValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error;
}