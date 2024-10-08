<?php

namespace WpService\Contracts;

interface HeaderTextcolor
{
    /**
     * Displays the custom header text color in 3- or 6-digit hexadecimal form (minus the hash symbol).
     *
     * @since 2.1.0
     */
    public function headerTextcolor(): void;
}
