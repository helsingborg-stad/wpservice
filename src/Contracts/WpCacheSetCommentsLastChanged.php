<?php

namespace WpService\Contracts;

interface WpCacheSetCommentsLastChanged
{
    /**
     * Sets the last changed time for the 'comment' cache group.
     *
     * @since 5.0.0
     */
    public function wpCacheSetCommentsLastChanged(): void;
}
