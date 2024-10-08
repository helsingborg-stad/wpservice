<?php

namespace WpService\Contracts;

interface GetAncestors
{
    /**
 * Gets an array of ancestor IDs for a given object.
 *
 * @since 3.1.0
 * @since 4.1.0 Introduced the `$resource_type` argument.
 *
 * @param int $objectId     Optional. The ID of the object. Default 0.
 * @param string $objectType   Optional. The type of object for which we'll be retrieving
 *                              ancestors. Accepts a post type or a taxonomy name. Default empty.
 * @param string $resourceType Optional. Type of resource $object_type is. Accepts 'post_type'
 *                              or 'taxonomy'. Default empty.
 * @return int[] An array of IDs of ancestors from lowest to highest in the hierarchy.
 */
    public function getAncestors(int $objectId, string $objectType, string $resourceType): array;
}
