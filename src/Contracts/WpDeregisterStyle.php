<?php

namespace WpService\Contracts;

interface WpDeregisterStyle
{
    /**
     * Removes a registered stylesheet.
     *
     * @see WP_Dependencies::remove()
     *
     * @since 2.1.0
     *
     * @param string $handle Name of the stylesheet to be removed.
     */
    public function wpDeregisterStyle(string $handle): void;
}
