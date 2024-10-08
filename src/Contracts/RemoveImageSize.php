<?php

namespace WpService\Contracts;

interface RemoveImageSize
{
    /**
 * Removes a new image size.
 *
 * @since 3.9.0
 *
 * @global array $_wp_additional_image_sizes
 *
 * @param string $name The image size to remove.
 * @return bool True if the image size was successfully removed, false on failure.
 */
    public function removeImageSize(string $name): bool;
}
