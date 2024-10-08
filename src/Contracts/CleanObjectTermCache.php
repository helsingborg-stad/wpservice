<?php

namespace WpService\Contracts;

interface CleanObjectTermCache
{
    /**
 * Removes the taxonomy relationship to terms from the cache.
 *
 * Will remove the entire taxonomy relationship containing term `$object_id`. The
 * term IDs have to exist within the taxonomy `$object_type` for the deletion to
 * take place.
 *
 * @since 2.3.0
 *
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @see get_object_taxonomies() for more on $object_type.
 *
 * @param int|array $objectIds  Single or list of term object ID(s).
 * @param array|string $objectType The taxonomy object type.
 */
    public function cleanObjectTermCache(int|array $objectIds, array|string $objectType): void;
}
