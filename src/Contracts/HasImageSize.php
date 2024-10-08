<?php

namespace WpService\Contracts;

interface HasImageSize
{
    /**
 * Checks if an image size exists.
 *
 * @since 3.9.0
 *
 * @param string $name The image size to check.
 * @return bool True if the image size exists, false if not.
 */
    public function hasImageSize(string $name): bool;
}
