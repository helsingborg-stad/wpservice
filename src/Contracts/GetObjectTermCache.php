<?php

namespace WpService\Contracts;

interface GetObjectTermCache
{
/**
 * Retrieves the cached term objects for the given object ID.
 *
 * Upstream functions (like get_the_terms() and is_object_in_term()) are
 * responsible for populating the object-term relationship cache. The current
 * function only fetches relationship data that is already in the cache.
 *
 * @since 2.3.0
 * @since 4.7.0 Returns a `WP_Error` object if there's an error with
 *              any of the matched terms.
 *
 * @param int $id       Term object ID, for example a post, comment, or user ID.
 * @param string $taxonomy Taxonomy name.
 * @return bool|WP_Term[]|WP_Error Array of `WP_Term` objects, if cached.
 *                                 False if cache is empty for `$taxonomy` and `$id`.
 *                                 WP_Error if get_term() returns an error object for any term.
 */
    public function getObjectTermCache(int $id, string $taxonomy): bool|array|\WP_Error;
}
