<?php

namespace WpService\Contracts;

interface UndismissCoreUpdate
{
    /**
 * Undismisses core update.
 *
 * @since 2.7.0
 *
 * @param string $version
 * @param string $locale
 * @return bool
 */
    public function undismissCoreUpdate(string $version, string $locale): bool;
}
