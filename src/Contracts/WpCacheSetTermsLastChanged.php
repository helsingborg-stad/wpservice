<?php

namespace WpService\Contracts;

interface WpCacheSetTermsLastChanged
{
    /**
 * Sets the last changed time for the 'terms' cache group.
 *
 * @since 5.0.0
 */
    public function wpCacheSetTermsLastChanged(): void;
}
