<?php

namespace WpService\Contracts;

interface GetEnvironmentType
{
    /**
     * Get the environment type.
     *
     * @return string The environment type.
     */
    public function getEnvironmentType(): string;
}
