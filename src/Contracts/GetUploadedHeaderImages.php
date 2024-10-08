<?php

namespace WpService\Contracts;

interface GetUploadedHeaderImages
{
    /**
 * Gets the header images uploaded for the active theme.
 *
 * @since 3.2.0
 *
 * @return array
 */
    public function getUploadedHeaderImages(): array;
}
