<?php

namespace WpService\Contracts;

interface IsProtectedEndpoint
{
    /**
 * Determines whether we are currently on an endpoint that should be protected against WSODs.
 *
 * @since 5.2.0
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @return bool True if the current endpoint should be protected.
 */
    public function isProtectedEndpoint(): bool;
}
