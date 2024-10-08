<?php

namespace WpService\Contracts;

interface BlockCoreNavigationBlockContainsCoreNavigation
{
    /**
     * Returns true if the navigation block contains a nested navigation block.
     *
     * @since 6.2.0
     *
     * @param \WP_Block_List $innerBlocks Inner block instance to be normalized.
     * @return bool true if the navigation block contains a nested navigation block.
     */
    public function blockCoreNavigationBlockContainsCoreNavigation(\WP_Block_List $innerBlocks): bool;
}
