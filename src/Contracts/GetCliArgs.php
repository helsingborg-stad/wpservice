<?php

namespace WpService\Contracts;

interface GetCliArgs
{
    /**
 * Returns value of command line params.
 * Exits when a required param is not set.
 *
 * @param string $param
 * @param bool $required
 * @return mixed
 */
    public function getCliArgs(string $param, bool $required = false): mixed;
}
