<?php

namespace WpService\Contracts;

interface GetUploadSpaceAvailable
{
    /**
     * Determines if there is any upload space left in the current blog's quota.
     *
     * @since 3.0.0
     *
     * @return int of upload space available in bytes.
     */
    public function getUploadSpaceAvailable(): int;
}
