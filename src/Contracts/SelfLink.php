<?php

namespace WpService\Contracts;

interface SelfLink
{
    /**
     * Displays the link for the currently displayed feed in a XSS safe way.
     *
     * Generate a correct link for the atom:self element.
     *
     * @since 2.5.0
     */
    public function selfLink(): void;
}
