<?php

namespace WpService\Contracts;

interface GetTransient
{
    /**
     * Retrieves the value of a transient.
     *
     * @see https://developer.wordpress.org/reference/functions/get_transient/
     *
     * @param string
     * @return mixed
     */
    public function getTransient(string $transient): mixed;
}
