<?php

namespace WpService\Contracts;

interface GetQueryVar
{
/**
 * Retrieves the value of a query variable in the WP_Query class.
 *
 * @since 1.5.0
 * @since 3.9.0 The `$default_value` argument was introduced.
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string $queryVar     The variable key to retrieve.
 * @param mixed $defaultValue Optional. Value to return if the query variable is not set.
 *                              Default empty string.
 * @return mixed Contents of the query variable.
 */
    public function getQueryVar(string $queryVar, mixed $defaultValue = ''): mixed;
}
