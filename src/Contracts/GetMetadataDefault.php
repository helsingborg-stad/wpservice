<?php

namespace WpService\Contracts;

interface GetMetadataDefault
{
    /**
     * Retrieves default metadata value for the specified meta key and object.
     *
     * By default, an empty string is returned if `$single` is true, or an empty array
     * if it's false.
     *
     * @since 5.5.0
     *
     * @param string $metaType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                          or any other object type with an associated meta table.
     * @param int $objectId ID of the object metadata is for.
     * @param string $metaKey  Metadata key.
     * @param bool $single    Optional. If true, return only the first value of the specified `$meta_key`.
     *                          This parameter has no effect if `$meta_key` is not specified. Default false.
     * @return mixed An array of default values if `$single` is false.
     *               The default value of the meta field if `$single` is true.
     */
    public function getMetadataDefault(string $metaType, int $objectId, string $metaKey, bool $single = false): mixed;
}
