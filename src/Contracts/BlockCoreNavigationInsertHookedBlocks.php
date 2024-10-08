<?php

namespace WpService\Contracts;

interface BlockCoreNavigationInsertHookedBlocks
{
    /**
     * Insert hooked blocks into a Navigation block.
     *
     * Given a Navigation block's inner blocks and its corresponding `wp_navigation` post object,
     * this function inserts hooked blocks into it, and returns the serialized inner blocks in a
     * mock Navigation block wrapper.
     *
     * If there are any hooked blocks that need to be inserted as the Navigation block's first or last
     * children, the `wp_navigation` post's `_wp_ignored_hooked_blocks` meta is checked to see if any
     * of those hooked blocks should be exempted from insertion.
     *
     * @since 6.5.0
     *
     * @param array $innerBlocks Parsed inner blocks of a Navigation block.
     * @param \WP_Post $post         `wp_navigation` post object corresponding to the block.
     * @return string Serialized inner blocks in mock Navigation block wrapper, with hooked blocks inserted, if any.
     */
    public function blockCoreNavigationInsertHookedBlocks(array $innerBlocks, \WP_Post $post): string;
}
