<?php

namespace WpService\Contracts;

interface FileIsDisplayableImage
{
    /**
 * Validates that file is suitable for displaying within a web page.
 *
 * @since 2.5.0
 *
 * @param string $path File path to test.
 * @return bool True if suitable, false if not suitable.
 */
    public function fileIsDisplayableImage(string $path): bool;
}
