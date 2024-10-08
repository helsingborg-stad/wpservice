<?php

namespace WpService\Contracts;

interface DisplaySpaceUsage
{
    /**
     * Displays the amount of disk space used by the current site. Not used in core.
     *
     * @since MU (3.0.0)
     */
    public function displaySpaceUsage(): void;
}
