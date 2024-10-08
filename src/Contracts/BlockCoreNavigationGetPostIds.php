<?php

namespace WpService\Contracts;

interface BlockCoreNavigationGetPostIds
{
    /**
 * Iterate through all inner blocks recursively and get navigation link block's post IDs.
 *
 * @since 6.0.0
 *
 * @param \WP_Block_List $innerBlocks Block list class instance.
 *
 * @return array Array of post IDs.
 */
    public function blockCoreNavigationGetPostIds(\WP_Block_List $innerBlocks): array;
}
