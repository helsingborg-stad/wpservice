<?php

namespace WpService\Contracts;

interface UnregisterMetaKey
{
/**
 * Unregisters a meta key from the list of registered keys.
 *
 * @since 4.6.0
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $objectType    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                               or any other object type with an associated meta table.
 * @param string $metaKey       Metadata key.
 * @param string $objectSubtype Optional. The subtype of the object type. Default empty string.
 * @return bool True if successful. False if the meta key was not registered.
 */
    public function unregisterMetaKey(string $objectType, string $metaKey, string $objectSubtype = ''): bool;
}
