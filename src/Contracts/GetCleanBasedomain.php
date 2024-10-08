<?php

namespace WpService\Contracts;

interface GetCleanBasedomain
{
    /**
 * Get base domain of network.
 *
 * @since 3.0.0
 * @return string Base domain.
 */
    public function getCleanBasedomain(): string;
}
