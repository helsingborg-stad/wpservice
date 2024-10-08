<?php

namespace WpService\Contracts;

interface DisplayHeader
{
    /**
 * Display installation header.
 *
 * @since 2.5.0
 *
 * @param string $bodyClasses
 */
    public function displayHeader(string $bodyClasses = ''): void;
}
