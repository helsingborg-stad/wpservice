<?php

namespace WpService\Contracts;

interface WpUnregisterFontCollection
{
    /**
 * Unregisters a font collection from the Font Library.
 *
 * @since 6.5.0
 *
 * @param string $slug Font collection slug.
 * @return bool True if the font collection was unregistered successfully, else false.
 */
    public function wpUnregisterFontCollection(string $slug): bool;
}
