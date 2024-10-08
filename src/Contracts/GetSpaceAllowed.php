<?php

namespace WpService\Contracts;

interface GetSpaceAllowed
{
    /**
 * Returns the upload quota for the current blog.
 *
 * @since MU (3.0.0)
 *
 * @return int Quota in megabytes.
 */
    public function getSpaceAllowed(): int;
}
