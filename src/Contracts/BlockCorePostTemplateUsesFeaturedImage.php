<?php

namespace WpService\Contracts;

interface BlockCorePostTemplateUsesFeaturedImage
{
/**
 * Determines whether a block list contains a block that uses the featured image.
 *
 * @since 6.0.0
 *
 * @param \WP_Block_List $innerBlocks Inner block instance.
 *
 * @return bool Whether the block list contains a block that uses the featured image.
 */
    public function blockCorePostTemplateUsesFeaturedImage(\WP_Block_List $innerBlocks): bool;
}
