<?php

namespace WpService\Contracts;

interface AddMetadata
{
    /**
 * Adds metadata for the specified object.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $metaType  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                           or any other object type with an associated meta table.
 * @param int $objectId  ID of the object metadata is for.
 * @param string $metaKey   Metadata key.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param bool $unique     Optional. Whether the specified metadata key should be unique for the object.
 *                           If true, and the object already has a value for the specified metadata key,
 *                           no change will be made. Default false.
 * @return int|false The meta ID on success, false on failure.
 */
    public function addMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
