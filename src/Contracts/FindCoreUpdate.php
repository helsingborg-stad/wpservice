<?php

namespace WpService\Contracts;

interface FindCoreUpdate
{
/**
 * Finds the available update for WordPress core.
 *
 * @since 2.7.0
 *
 * @param string $version Version string to find the update for.
 * @param string $locale  Locale to find the update for.
 * @return object|false The core update offering on success, false on failure.
 */
    public function findCoreUpdate(string $version, string $locale): object|false;
}
