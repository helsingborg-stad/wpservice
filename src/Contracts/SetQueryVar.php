<?php

namespace WpService\Contracts;

interface SetQueryVar
{
    /**
 * Sets the value of a query variable in the WP_Query class.
 *
 * @since 2.2.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string $queryVar Query variable key.
 * @param mixed $value     Query variable value.
 */
    public function setQueryVar(string $queryVar, mixed $value): void;
}
