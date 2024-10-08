<?php

namespace WpService\Contracts;

interface UpdateMetadataByMid
{
    /**
     * Updates metadata by meta ID.
     *
     * @since 3.3.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $metaType  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                                 or any other object type with an associated meta table.
     * @param int $metaId    ID for a specific meta row.
     * @param string $metaValue Metadata value. Must be serializable if non-scalar.
     * @param string|false $metaKey   Optional. You can provide a meta key to update it. Default false.
     * @return bool True on successful update, false on failure.
     */
    public function updateMetadataByMid(string $metaType, int $metaId, string $metaValue, string|false $metaKey = false): bool;
}
