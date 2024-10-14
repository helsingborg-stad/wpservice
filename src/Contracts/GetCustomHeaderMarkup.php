<?php

namespace WpService\Contracts;

interface GetCustomHeaderMarkup
{
/**
 * Retrieves the markup for a custom header.
 *
 * The container div will always be returned in the Customizer preview.
 *
 * @since 4.7.0
 *
 * @return string The markup for a custom header on success.
 */
    public function getCustomHeaderMarkup(): string;
}
