<?php

namespace WpService\Contracts;

interface UpdateMetaCache
{
    /**
     * Updates the metadata cache for the specified objects.
     *
     * @since 2.9.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $metaType  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                                 or any other object type with an associated meta table.
     * @param string|int[] $objectIds Array or comma delimited list of object IDs to update cache for.
     * @return array|false Metadata cache for the specified objects, or false on failure.
     */
    public function updateMetaCache(string $metaType, string|array $objectIds): array|false;
}
