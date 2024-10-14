<?php

namespace WpService\Contracts;

interface WpCacheSetUsersLastChanged
{
/**
 * Sets the last changed time for the 'users' cache group.
 *
 * @since 6.3.0
 */
    public function wpCacheSetUsersLastChanged(): void;
}
