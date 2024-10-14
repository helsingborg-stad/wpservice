<?php

namespace WpService\Contracts;

interface UpdatePostCaches
{
/**
 * Updates post, term, and metadata caches for a list of post objects.
 *
 * @since 1.5.0
 *
 * @param WP_Post[] $posts             Array of post objects (passed by reference).
 * @param string $postType         Optional. Post type. Default 'post'.
 * @param bool $updateTermCache Optional. Whether to update the term cache. Default true.
 * @param bool $updateMetaCache Optional. Whether to update the meta cache. Default true.
 */
    public function updatePostCaches(array &$posts, string $postType = 'post', bool $updateTermCache = true, bool $updateMetaCache = true): void;
}
