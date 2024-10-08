<?php

namespace WpService\Contracts;

interface HasHeaderImage
{
    /**
 * Checks whether a header image is set or not.
 *
 * @since 4.2.0
 *
 * @see get_header_image()
 *
 * @return bool Whether a header image is set or not.
 */
    public function hasHeaderImage(): bool;
}
