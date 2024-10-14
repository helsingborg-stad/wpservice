<?php

namespace WpService\Contracts;

interface WpOldSlugRedirect
{
/**
 * Redirect old slugs to the correct permalink.
 *
 * Attempts to find the current slug from the past slugs.
 *
 * @since 2.1.0
 */
    public function wpOldSlugRedirect(): void;
}
