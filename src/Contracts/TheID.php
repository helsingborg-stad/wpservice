<?php

namespace WpService\Contracts;

interface TheID
{
    /**
     * Displays the ID of the current item in the WordPress Loop.
     *
     * @since 0.71
     */
    public function theID(): void;
}
