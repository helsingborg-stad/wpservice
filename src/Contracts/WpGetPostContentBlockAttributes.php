<?php

namespace WpService\Contracts;

interface WpGetPostContentBlockAttributes
{
    /**
 * Retrieves Post Content block attributes from the current post template.
 *
 * @since 6.3.0
 * @since 6.4.0 Return null if there is no post content block.
 * @access private
 *
 * @global int $post_ID
 *
 * @return array|null Post Content block attributes array or null if Post Content block doesn't exist.
 */
    public function wpGetPostContentBlockAttributes(): array|null;
}
