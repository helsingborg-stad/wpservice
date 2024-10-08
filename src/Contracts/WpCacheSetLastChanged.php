<?php

namespace WpService\Contracts;

interface WpCacheSetLastChanged
{
    /**
     * Sets last changed date for the specified cache group to now.
     *
     * @since 6.3.0
     *
     * @param string $group Where the cache contents are grouped.
     * @return string UNIX timestamp when the group was last changed.
     */
    public function wpCacheSetLastChanged(string $group): string;
}
