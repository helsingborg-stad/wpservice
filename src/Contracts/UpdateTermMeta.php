<?php

namespace WpService\Contracts;

interface UpdateTermMeta
{
/**
 * Updates term metadata.
 *
 * Use the `$prev_value` parameter to differentiate between meta fields with the same key and term ID.
 *
 * If the meta field for the term does not exist, it will be added.
 *
 * @since 4.4.0
 *
 * @param int $termId    Term ID.
 * @param string $metaKey   Metadata key.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param mixed $prevValue Optional. Previous value to check before updating.
 *                           If specified, only update existing metadata entries with
 *                           this value. Otherwise, update all entries. Default empty.
 * @return int|bool|\WP_Error Meta ID if the key didn't exist. true on successful update,
 *                           false on failure or if the value passed to the function
 *                           is the same as the one that is already in the database.
 *                           WP_Error when term_id is ambiguous between taxonomies.
 */
    public function updateTermMeta(int $termId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool|\WP_Error;
}
