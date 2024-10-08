<?php

namespace WpService\Contracts;

interface WpCacheSetPostsLastChanged
{
    /**
     * Sets the last changed time for the 'posts' cache group.
     *
     * @since 5.0.0
     */
    public function wpCacheSetPostsLastChanged(): void;
}
