<?php

namespace WpService\Contracts;

interface RestValidateNullValueFromSchema
{
    /**
 * Validates a null value based on a schema.
 *
 * @since 5.7.0
 *
 * @param mixed $value The value to validate.
 * @param string $param The parameter name, used in error messages.
 * @return true|\WP_Error
 */
    public function restValidateNullValueFromSchema(mixed $value, string $param): true|\WP_Error;
}
