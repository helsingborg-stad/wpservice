<?php

namespace WpService\Contracts;

interface GetAllowedHttpOrigins
{
    /**
     * Retrieves list of allowed HTTP origins.
     *
     * @since 3.4.0
     *
     * @return string[] Array of origin URLs.
     */
    public function getAllowedHttpOrigins(): array;
}
