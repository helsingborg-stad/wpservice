<?php

namespace WpService\Contracts;

interface MetadataExists
{
    /**
     * Determines if a meta field with the given key exists for the given object ID.
     *
     * @since 3.3.0
     *
     * @param string $metaType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                          or any other object type with an associated meta table.
     * @param int $objectId ID of the object metadata is for.
     * @param string $metaKey  Metadata key.
     * @return bool Whether a meta field with the given key exists.
     */
    public function metadataExists(string $metaType, int $objectId, string $metaKey): bool;
}
