<?php

namespace WpService\Contracts;

interface RemoveRewriteTag
{
/**
 * Removes an existing rewrite tag (like %postname%).
 *
 * @since 4.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $tag Name of the rewrite tag.
 */
    public function removeRewriteTag(string $tag): void;
}
