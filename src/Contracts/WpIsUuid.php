<?php

namespace WpService\Contracts;

interface WpIsUuid
{
    /**
     * Validates that a UUID is valid.
     *
     * @since 4.9.0
     *
     * @param mixed $uuid    UUID to check.
     * @param int $version Specify which version of UUID to check against. Default is none,
     *                       to accept any UUID version. Otherwise, only version allowed is `4`.
     * @return bool The string is a valid UUID or false on failure.
     */
    public function wpIsUuid(mixed $uuid, int $version = null): bool;
}
