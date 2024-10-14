<?php

namespace WpService\Contracts;

interface RestFindAnyMatchingSchema
{
/**
 * Finds the matching schema among the "anyOf" schemas.
 *
 * @since 5.6.0
 *
 * @param mixed $value   The value to validate.
 * @param array $args    The schema array to use.
 * @param string $param   The parameter name, used in error messages.
 * @return array|\WP_Error The matching schema or WP_Error instance if all schemas do not match.
 */
    public function restFindAnyMatchingSchema(mixed $value, array $args, string $param): array|\WP_Error;
}
