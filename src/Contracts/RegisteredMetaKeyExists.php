<?php

namespace WpService\Contracts;

interface RegisteredMetaKeyExists
{
    /**
     * Checks if a meta key is registered.
     *
     * @since 4.6.0
     * @since 4.9.8 The `$object_subtype` parameter was added.
     *
     * @param string $objectType    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                               or any other object type with an associated meta table.
     * @param string $metaKey       Metadata key.
     * @param string $objectSubtype Optional. The subtype of the object type. Default empty string.
     * @return bool True if the meta key is registered to the object type and, if provided,
     *              the object subtype. False if not.
     */
    public function registeredMetaKeyExists(string $objectType, string $metaKey, string $objectSubtype = ''): bool;
}
