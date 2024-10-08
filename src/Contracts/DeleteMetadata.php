<?php

namespace WpService\Contracts;

interface DeleteMetadata
{
    /**
 * Deletes metadata for the specified object.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $metaType  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                           or any other object type with an associated meta table.
 * @param int $objectId  ID of the object metadata is for.
 * @param string $metaKey   Metadata key.
 * @param mixed $metaValue Optional. Metadata value. Must be serializable if non-scalar.
 *                           If specified, only delete metadata entries with this value.
 *                           Otherwise, delete all entries with the specified meta_key.
 *                           Pass `null`, `false`, or an empty string to skip this check.
 *                           (For backward compatibility, it is not possible to pass an empty string
 *                           to delete those entries with an empty string for a value.)
 *                           Default empty string.
 * @param bool $deleteAll Optional. If true, delete matching metadata entries for all objects,
 *                           ignoring the specified object_id. Otherwise, only delete
 *                           matching metadata entries for the specified object_id. Default false.
 * @return bool True on successful delete, false on failure.
 */
    public function deleteMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue = '', bool $deleteAll = false): bool;
}
