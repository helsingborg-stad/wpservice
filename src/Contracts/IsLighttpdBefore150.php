<?php

namespace WpService\Contracts;

interface IsLighttpdBefore150
{
    /**
     * Determines whether the server is running an earlier than 1.5.0 version of lighttpd.
     *
     * @since 2.5.0
     *
     * @return bool Whether the server is running lighttpd < 1.5.0.
     */
    public function isLighttpdBefore150(): bool;
}
