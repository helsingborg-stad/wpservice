<?php

namespace WpService\Contracts;

interface IsUploadSpaceAvailable
{
    /**
 * Determines if there is any upload space left in the current blog's quota.
 *
 * @since 3.0.0
 * @return bool True if space is available, false otherwise.
 */
    public function isUploadSpaceAvailable(): bool;
}
