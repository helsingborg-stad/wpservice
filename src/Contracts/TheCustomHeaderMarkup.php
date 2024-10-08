<?php

namespace WpService\Contracts;

interface TheCustomHeaderMarkup
{
    /**
 * Prints the markup for a custom header.
 *
 * A container div will always be printed in the Customizer preview.
 *
 * @since 4.7.0
 */
    public function theCustomHeaderMarkup(): void;
}
