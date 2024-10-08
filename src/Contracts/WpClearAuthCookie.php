<?php

namespace WpService\Contracts;

interface WpClearAuthCookie
{
    /**
     * Removes all of the cookies associated with authentication.
     *
     * @since 2.5.0
     */
    public function wpClearAuthCookie(): void;
}
