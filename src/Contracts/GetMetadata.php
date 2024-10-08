<?php

namespace WpService\Contracts;

interface GetMetadata
{
    /**
 * Retrieves the value of a metadata field for the specified object type and ID.
 *
 * If the meta field exists, a single value is returned if `$single` is true,
 * or an array of values if it's false.
 *
 * If the meta field does not exist, the result depends on get_metadata_default().
 * By default, an empty string is returned if `$single` is true, or an empty array
 * if it's false.
 *
 * @since 2.9.0
 *
 * @see get_metadata_raw()
 * @see get_metadata_default()
 *
 * @param string $metaType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int $objectId ID of the object metadata is for.
 * @param string $metaKey  Optional. Metadata key. If not specified, retrieve all metadata for
 *                          the specified object. Default empty string.
 * @param bool $single    Optional. If true, return only the first value of the specified `$meta_key`.
 *                          This parameter has no effect if `$meta_key` is not specified. Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of the meta field if `$single` is true.
 *               False for an invalid `$object_id` (non-numeric, zero, or negative value),
 *               or if `$meta_type` is not specified.
 *               An empty string if a valid but non-existing object ID is passed.
 */
    public function getMetadata(string $metaType, int $objectId, string $metaKey = '', bool $single = false): mixed;
}
