<?php

namespace WpService\Contracts;

interface BlockCoreNavigationLinkFilterVariations
{
    /**
     * Filters the registered variations for a block type.
     * Returns the dynamically built variations for all post-types and taxonomies.
     *
     * @since 6.5.0
     *
     * @param array $variations Array of registered variations for a block type.
     * @param \WP_Block_Type $blockType The full block type object.
     */
    public function blockCoreNavigationLinkFilterVariations(array $variations, \WP_Block_Type $blockType): void;
}
