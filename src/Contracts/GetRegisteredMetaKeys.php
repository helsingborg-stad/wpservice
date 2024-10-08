<?php

namespace WpService\Contracts;

interface GetRegisteredMetaKeys
{
    /**
     * Retrieves a list of registered metadata args for an object type, keyed by their meta keys.
     *
     * @since 4.6.0
     * @since 4.9.8 The `$object_subtype` parameter was added.
     *
     * @param string $objectType    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                               or any other object type with an associated meta table.
     * @param string $objectSubtype Optional. The subtype of the object type. Default empty string.
     * @return array[] List of registered metadata args, keyed by their meta keys.
     */
    public function getRegisteredMetaKeys(string $objectType, string $objectSubtype = ''): array;
}
