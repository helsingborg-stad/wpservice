<?php

namespace WpService\Contracts;

interface WpCacheGetLastChanged
{
    /**
     * Gets last changed date for the specified cache group.
     *
     * @since 4.7.0
     *
     * @param string $group Where the cache contents are grouped.
     * @return string UNIX timestamp with microseconds representing when the group was last changed.
     */
    public function wpCacheGetLastChanged(string $group): string;
}
