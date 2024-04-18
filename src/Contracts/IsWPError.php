<?php

namespace WpService\Contracts;

use WP_Error;
use WP_Term;

interface IsWPError
{
    /**
     * Check whether variable is a WP_Error object.
     *
     * @param mixed $thing
     *
     * @return bool
     */
    public function isWPError(mixed $thing): bool;
}
