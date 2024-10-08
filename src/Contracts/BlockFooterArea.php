<?php

namespace WpService\Contracts;

interface BlockFooterArea
{
    /**
     * Prints the footer block template part.
     *
     * @since 5.9.0
     */
    public function blockFooterArea(): void;
}
