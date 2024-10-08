<?php

namespace WpService\Contracts;

interface BlockCoreNavigationLinkBuildVariations
{
    /**
 * Returns an array of variations for the navigation link block.
 *
 * @since 6.5.0
 *
 * @return array
 */
    public function blockCoreNavigationLinkBuildVariations(): array;
}
