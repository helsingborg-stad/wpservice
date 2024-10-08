<?php

namespace WpService\Contracts;

interface RelCanonical
{
    /**
 * Outputs rel=canonical for singular queries.
 *
 * @since 2.9.0
 * @since 4.6.0 Adjusted to use `wp_get_canonical_url()`.
 */
    public function relCanonical(): void;
}
