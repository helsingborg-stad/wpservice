<?php

namespace WpService\Contracts;

interface GetCoreChecksums
{
    /**
     * Gets and caches the checksums for the given version of WordPress.
     *
     * @since 3.7.0
     *
     * @param string $version Version string to query.
     * @param string $locale  Locale to query.
     * @return array|false An array of checksums on success, false on failure.
     */
    public function getCoreChecksums(string $version, string $locale): array|false;
}
