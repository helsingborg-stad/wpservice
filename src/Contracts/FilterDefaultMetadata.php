<?php

namespace WpService\Contracts;

interface FilterDefaultMetadata
{
    /**
 * Filters into default_{$object_type}_metadata and adds in default value.
 *
 * @since 5.5.0
 *
 * @param mixed $value     Current value passed to filter.
 * @param int $objectId ID of the object metadata is for.
 * @param string $metaKey  Metadata key.
 * @param bool $single    If true, return only the first value of the specified `$meta_key`.
 *                          This parameter has no effect if `$meta_key` is not specified.
 * @param string $metaType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @return mixed An array of default values if `$single` is false.
 *               The default value of the meta field if `$single` is true.
 */
    public function filterDefaultMetadata(mixed $value, int $objectId, string $metaKey, bool $single, string $metaType): mixed;
}
