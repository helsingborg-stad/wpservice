<?php

namespace WpService\Contracts;

interface WpCacheSetSitesLastChanged
{
    /**
 * Sets the last changed time for the 'sites' cache group.
 *
 * @since 5.1.0
 */
    public function wpCacheSetSitesLastChanged(): void;
}
