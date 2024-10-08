<?php

namespace WpService\Contracts;

interface GetObjectSubtype
{
    /**
     * Returns the object subtype for a given object ID of a specific type.
     *
     * @since 4.9.8
     *
     * @param string $objectType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                            or any other object type with an associated meta table.
     * @param int $objectId   ID of the object to retrieve its subtype.
     * @return string The object subtype or an empty string if unspecified subtype.
     */
    public function getObjectSubtype(string $objectType, int $objectId): string;
}
