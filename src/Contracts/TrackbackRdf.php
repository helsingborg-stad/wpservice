<?php

namespace WpService\Contracts;

interface TrackbackRdf
{
    /**
 * Generates and displays the RDF for the trackback information of current post.
 *
 * Deprecated in 3.0.0, and restored in 3.0.1.
 *
 * @since 0.71
 *
 * @param int|string $deprecated Not used (Was $timezone = 0).
 */
    public function trackbackRdf(int|string $deprecated = ''): void;
}
