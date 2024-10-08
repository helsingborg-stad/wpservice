<?php

namespace WpService\Contracts;

interface UpdateMetadata
{
    /**
     * Updates metadata for the specified object. If no value already exists for the specified object
     * ID and metadata key, the metadata will be added.
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
     * @param mixed $prevValue Optional. Previous value to check before updating.
     *                           If specified, only update existing metadata entries with
     *                           this value. Otherwise, update all entries. Default empty string.
     * @return int|bool The new meta field ID if a field with the given key didn't exist
     *                  and was therefore added, true on successful update,
     *                  false on failure or if the value passed to the function
     *                  is the same as the one that is already in the database.
     */
    public function updateMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool;
}
