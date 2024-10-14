<?php

namespace WpService\Contracts;

interface GetTransient
{
/**
 * Retrieves the value of a transient.
 *
 * If the transient does not exist, does not have a value, or has expired,
 * then the return value will be false.
 *
 * @since 2.8.0
 *
 * @param string $transient Transient name. Expected to not be SQL-escaped.
 * @return mixed Value of transient.
 */
    public function getTransient(string $transient): mixed;
}
