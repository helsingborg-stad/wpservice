<?php

namespace WpService\Contracts;

interface BlockCorePostTermsBuildVariations
{
    /**
 * Returns the available variations for the `core/post-terms` block.
 *
 * @since 6.5.0
 *
 * @return array The available variations for the block.
 */
    public function blockCorePostTermsBuildVariations(): array;
}
