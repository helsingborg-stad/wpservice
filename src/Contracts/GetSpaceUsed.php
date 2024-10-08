<?php

namespace WpService\Contracts;

interface GetSpaceUsed
{
    /**
     * Returns the space used by the current site.
     *
     * @since 3.5.0
     *
     * @return int Used space in megabytes.
     */
    public function getSpaceUsed(): int;
}
