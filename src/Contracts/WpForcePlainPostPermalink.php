<?php

namespace WpService\Contracts;

interface WpForcePlainPostPermalink
{
    /**
 * Determine whether post should always use a plain permalink structure.
 *
 * @since 5.7.0
 *
 * @param \WP_Post|int|null $post   Optional. Post ID or post object. Defaults to global $post.
 * @param bool|null $sample Optional. Whether to force consideration based on sample links.
 *                                 If omitted, a sample link is generated if a post object is passed
 *                                 with the filter property set to 'sample'.
 * @return bool Whether to use a plain permalink structure.
 */
    public function wpForcePlainPostPermalink(\WP_Post|int|null $post = null, bool|null $sample = null): bool;
}
