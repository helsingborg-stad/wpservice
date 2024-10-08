<?php

namespace WpService\Contracts;

interface BlockTemplatePart
{
    /**
     * Prints a block template part.
     *
     * @since 5.9.0
     *
     * @param string $part The block template part to print, for example 'header' or 'footer'.
     */
    public function blockTemplatePart(string $part): void;
}
