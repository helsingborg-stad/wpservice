<?php

namespace WpService\Contracts;

interface UpdateObjectTermCache
{
    /**
 * Updates the cache for the given term object ID(s).
 *
 * Note: Due to performance concerns, great care should be taken to only update
 * term caches when necessary. Processing time can increase exponentially depending
 * on both the number of passed term IDs and the number of taxonomies those terms
 * belong to.
 *
 * Caches will only be updated for terms not already cached.
 *
 * @since 2.3.0
 *
 * @param string|int[] $objectIds  Comma-separated list or array of term object IDs.
 * @param string|string[] $objectType The taxonomy object type or array of the same.
 * @return void|false Void on success or if the `$object_ids` parameter is empty,
 *                    false if all of the terms in `$object_ids` are already cached.
 */
    public function updateObjectTermCache(string|array $objectIds, string|array $objectType): mixed;
}
