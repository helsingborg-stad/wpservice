<?php

namespace WpService\Contracts;

interface AddTermMeta
{
/**
 * Adds metadata to a term.
 *
 * For historical reasons both the meta key and the meta value are expected to be "slashed" (slashes escaped) on input.
 *
 * @since 4.4.0
 *
 * @param int $termId    Term ID.
 * @param string $metaKey   Metadata name.
 * @param mixed $metaValue Metadata value. Arrays and objects are stored as serialized data and
 *                           will be returned as the same type when retrieved. Other data types will
 *                           be stored as strings in the database:
 *                           - false is stored and retrieved as an empty string ('')
 *                           - true is stored and retrieved as '1'
 *                           - numbers (both integer and float) are stored and retrieved as strings
 *                           Must be serializable if non-scalar.
 * @param bool $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false|\WP_Error Meta ID on success, false on failure.
 *                            WP_Error when term_id is ambiguous between taxonomies.
 */
    public function addTermMeta(int $termId, string $metaKey, mixed $metaValue, bool $unique = false): int|false|\WP_Error;
}
