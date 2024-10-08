<?php

namespace WpService\Contracts;

interface AddSiteMeta
{
    /**
 * Adds metadata to a site.
 *
 * @since 5.1.0
 *
 * @param int $siteId    Site ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param bool $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false Meta ID on success, false on failure.
 */
    public function addSiteMeta(int $siteId, string $metaKey, mixed $metaValue, bool $unique = false): int|false;
}
