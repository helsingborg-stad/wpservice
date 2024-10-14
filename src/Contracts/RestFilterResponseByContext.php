<?php

namespace WpService\Contracts;

interface RestFilterResponseByContext
{
/**
 * Filters the response to remove any fields not available in the given context.
 *
 * @since 5.5.0
 * @since 5.6.0 Support the "patternProperties" keyword for objects.
 *              Support the "anyOf" and "oneOf" keywords.
 *
 * @param array|object $responseData The response data to modify.
 * @param array $schema        The schema for the endpoint used to filter the response.
 * @param string $context       The requested context.
 * @return array|object The filtered response data.
 */
    public function restFilterResponseByContext(array|object $responseData, array $schema, string $context): array|object;
}
