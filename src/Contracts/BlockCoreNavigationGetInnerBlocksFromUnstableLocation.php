<?php

namespace WpService\Contracts;

interface BlockCoreNavigationGetInnerBlocksFromUnstableLocation
{
    /**
     * Gets the inner blocks for the navigation block from the unstable location attribute.
     *
     * @since 6.5.0
     *
     * @param array $attributes The block attributes.
     * @return \WP_Block_List Returns the inner blocks for the navigation block.
     */
    public function blockCoreNavigationGetInnerBlocksFromUnstableLocation(array $attributes): \WP_Block_List;
}
