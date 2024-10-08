<?php

namespace WpService\Contracts;

interface SanitizeMeta
{
    /**
 * Sanitizes meta value.
 *
 * @since 3.1.3
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $metaKey       Metadata key.
 * @param mixed $metaValue     Metadata value to sanitize.
 * @param string $objectType    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                               or any other object type with an associated meta table.
 * @param string $objectSubtype Optional. The subtype of the object type. Default empty string.
 * @return mixed Sanitized $meta_value.
 */
    public function sanitizeMeta(string $metaKey, mixed $metaValue, string $objectType, string $objectSubtype): mixed;
}
