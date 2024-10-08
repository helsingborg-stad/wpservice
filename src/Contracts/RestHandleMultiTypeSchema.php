<?php

namespace WpService\Contracts;

interface RestHandleMultiTypeSchema
{
    /**
     * Handles getting the best type for a multi-type schema.
     *
     * This is a wrapper for {@see rest_get_best_type_for_value()} that handles
     * backward compatibility for schemas that use invalid types.
     *
     * @since 5.5.0
     *
     * @param mixed $value The value to check.
     * @param array $args  The schema array to use.
     * @param string $param The parameter name, used in error messages.
     * @return string
     */
    public function restHandleMultiTypeSchema(mixed $value, array $args, string $param = ''): string;
}
