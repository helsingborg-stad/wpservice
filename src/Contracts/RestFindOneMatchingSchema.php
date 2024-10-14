<?php

namespace WpService\Contracts;

interface RestFindOneMatchingSchema
{
/**
 * Finds the matching schema among the "oneOf" schemas.
 *
 * @since 5.6.0
 *
 * @param mixed $value                  The value to validate.
 * @param array $args                   The schema array to use.
 * @param string $param                  The parameter name, used in error messages.
 * @param bool $stopAfterFirstMatch Optional. Whether the process should stop after the first successful match.
 * @return array|\WP_Error                The matching schema or WP_Error instance if the number of matching schemas is not equal to one.
 */
    public function restFindOneMatchingSchema(mixed $value, array $args, string $param, bool $stopAfterFirstMatch = false): array|\WP_Error;
}
