<?php

namespace WpService\Contracts;

interface BlockCoreNavigationFromBlockGetPostIds
{
    /**
 * Get post IDs from a navigation link block instance.
 *
 * @since 6.0.0
 *
 * @param \WP_Block $block Instance of a block.
 *
 * @return array Array of post IDs.
 */
    public function blockCoreNavigationFromBlockGetPostIds(\WP_Block $block): array;
}
