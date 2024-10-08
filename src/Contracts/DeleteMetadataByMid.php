<?php

namespace WpService\Contracts;

interface DeleteMetadataByMid
{
    /**
     * Deletes metadata by meta ID.
     *
     * @since 3.3.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $metaType Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                          or any other object type with an associated meta table.
     * @param int $metaId   ID for a specific meta row.
     * @return bool True on successful delete, false on failure.
     */
    public function deleteMetadataByMid(string $metaType, int $metaId): bool;
}
