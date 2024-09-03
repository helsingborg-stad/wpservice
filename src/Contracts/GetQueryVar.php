<?php

namespace WpService\Contracts;

interface GetQueryVar
{
    /**
     * Retrieves the value of a query variable.
     *
     * @param string $var     The query variable name.
     * @param mixed  $default Optional. Default value to return if the query variable is not set. Default empty string.
     * @return mixed The value of the query variable. Can be string, integer, boolean, or null.
     */
    public function getQueryVar(string $var, mixed $default = ''): mixed;
}
