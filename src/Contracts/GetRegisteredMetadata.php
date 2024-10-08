<?php

namespace WpService\Contracts;

interface GetRegisteredMetadata
{
    /**
 * Retrieves registered metadata for a specified object.
 *
 * The results include both meta that is registered specifically for the
 * object's subtype and meta that is registered for the entire object type.
 *
 * @since 4.6.0
 *
 * @param string $objectType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                            or any other object type with an associated meta table.
 * @param int $objectId   ID of the object the metadata is for.
 * @param string $metaKey    Optional. Registered metadata key. If not specified, retrieve all registered
 *                            metadata for the specified object.
 * @return mixed A single value or array of values for a key if specified. An array of all registered keys
 *               and values for an object ID if not. False if a given $meta_key is not registered.
 */
    public function getRegisteredMetadata(string $objectType, int $objectId, string $metaKey = ''): mixed;
}
