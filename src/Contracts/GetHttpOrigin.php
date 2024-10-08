<?php

namespace WpService\Contracts;

interface GetHttpOrigin
{
    /**
     * Gets the HTTP Origin of the current request.
     *
     * @since 3.4.0
     *
     * @return string URL of the origin. Empty string if no origin.
     */
    public function getHttpOrigin(): string;
}
