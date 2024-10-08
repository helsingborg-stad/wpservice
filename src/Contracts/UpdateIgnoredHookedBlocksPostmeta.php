<?php

namespace WpService\Contracts;

interface UpdateIgnoredHookedBlocksPostmeta
{
    /**
 * Updates the wp_postmeta with the list of ignored hooked blocks where the inner blocks are stored as post content.
 * Currently only supports `wp_navigation` post types.
 *
 * @since 6.6.0
 * @access private
 *
 * @param \stdClass $post Post object.
 * @return \stdClass The updated post object.
 */
    public function updateIgnoredHookedBlocksPostmeta(\stdClass $post): \stdClass;
}
