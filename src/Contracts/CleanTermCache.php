<?php

namespace WpService\Contracts;

interface CleanTermCache
{
    /**
 * Removes all of the term IDs from the cache.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb                           WordPress database abstraction object.
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @param int|int[] $ids            Single or array of term IDs.
 * @param string $taxonomy       Optional. Taxonomy slug. Can be empty, in which case the taxonomies of the passed
 *                                  term IDs will be used. Default empty.
 * @param bool $cleanTaxonomy Optional. Whether to clean taxonomy wide caches (true), or just individual
 *                                  term object caches (false). Default true.
 */
    public function cleanTermCache(int|array $ids, string $taxonomy = '', bool $cleanTaxonomy = true): void;
}
