<?php

namespace WpService\Contracts;

interface FileIsValidImage
{
    /**
     * Validates that file is an image.
     *
     * @since 2.5.0
     *
     * @param string $path File path to test if valid image.
     * @return bool True if valid image, false if not valid image.
     */
    public function fileIsValidImage(string $path): bool;
}
