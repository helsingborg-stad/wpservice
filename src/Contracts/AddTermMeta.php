<?php

namespace WpService\Contracts;

interface AddTermMeta
{
    /**
 * Adds metadata to a term.
 *
 * @since 4.4.0
 *
 * @param int $termId    Term ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Metadata value. Must be serializable if non-scalar.
 * @param bool $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false|\WP_Error Meta ID on success, false on failure.
 *                            WP_Error when term_id is ambiguous between taxonomies.
 */
    public function addTermMeta(int $termId, string $metaKey, mixed $metaValue, bool $unique = false): int|false|\WP_Error;
}
