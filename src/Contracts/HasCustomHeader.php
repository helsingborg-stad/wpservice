<?php

namespace WpService\Contracts;

interface HasCustomHeader
{
    /**
     * Checks whether a custom header is set or not.
     *
     * @since 4.7.0
     *
     * @return bool True if a custom header is set. False if not.
     */
    public function hasCustomHeader(): bool;
}
