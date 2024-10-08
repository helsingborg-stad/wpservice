<?php

namespace WpService\Contracts;

interface WpCacheAddNonPersistentGroups
{
    /**
     * Adds a group or set of groups to the list of non-persistent groups.
     *
     * @since 2.6.0
     *
     * @param string|string[] $groups A group or an array of groups to add.
     */
    public function wpCacheAddNonPersistentGroups(string|array $groups): void;
}
