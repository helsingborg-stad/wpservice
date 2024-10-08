<?php

namespace WpService\Contracts;

interface AddRewriteTag
{
    /**
 * Adds a new rewrite tag (like %postname%).
 *
 * The `$query` parameter is optional. If it is omitted you must ensure that you call
 * this on, or before, the {@see 'init'} hook. This is because `$query` defaults to
 * `$tag=`, and for this to work a new query var has to be added.
 *
 * @since 2.1.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 * @global WP         $wp         Current WordPress environment instance.
 *
 * @param string $tag   Name of the new rewrite tag.
 * @param string $regex Regular expression to substitute the tag for in rewrite rules.
 * @param string $query Optional. String to append to the rewritten query. Must end in '='. Default empty.
 */
    public function addRewriteTag(string $tag, string $regex, string $query = ''): void;
}
