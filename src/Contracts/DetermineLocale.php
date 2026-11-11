<?php

namespace WpService\Contracts;

interface DetermineLocale
{
/**
 * Determines the current locale desired for the request.
 *
 * @since 5.0.0
 *
 * @global string $pagenow          The filename of the current screen.
 * @global string $wp_local_package Locale code of the package.
 *
 * @return string The determined locale.
 */
    public function determineLocale(): string;
}
