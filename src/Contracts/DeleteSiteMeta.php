<?php

namespace WpService\Contracts;

interface DeleteSiteMeta
{
    /**
 * Removes metadata matching criteria from a site.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching key, if needed.
 *
 * @since 5.1.0
 *
 * @param int $siteId    Site ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Optional. Metadata value. If provided,
 *                           rows will only be removed that match the value.
 *                           Must be serializable if non-scalar. Default empty.
 * @return bool True on success, false on failure.
 */
    public function deleteSiteMeta(int $siteId, string $metaKey, mixed $metaValue): bool;
}
