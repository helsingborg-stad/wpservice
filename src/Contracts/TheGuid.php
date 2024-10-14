<?php

namespace WpService\Contracts;

interface TheGuid
{
/**
 * Displays the Post Global Unique Identifier (guid).
 *
 * The guid will appear to be a link, but should not be used as a link to the
 * post. The reason you should not use it as a link, is because of moving the
 * blog across domains.
 *
 * URL is escaped to make it XML-safe.
 *
 * @since 1.5.0
 *
 * @param int|\WP_Post $post Optional. Post ID or post object. Default is global $post.
 */
    public function theGuid(int|\WP_Post $post = 0): void;
}
