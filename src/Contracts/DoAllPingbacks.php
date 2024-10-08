<?php

namespace WpService\Contracts;

interface DoAllPingbacks
{
    /**
     * Performs all pingbacks.
     *
     * @since 5.6.0
     */
    public function doAllPingbacks(): void;
}
