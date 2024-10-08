<?php

namespace WpService\Contracts;

interface RestValidateEnum
{
    /**
     * Validates that the given value is a member of the JSON Schema "enum".
     *
     * @since 5.7.0
     *
     * @param mixed $value  The value to validate.
     * @param array $args   The schema array to use.
     * @param string $param  The parameter name, used in error messages.
     * @return true|\WP_Error True if the "enum" contains the value or a WP_Error instance otherwise.
     */
    public function restValidateEnum(mixed $value, array $args, string $param): true|\WP_Error;
}
