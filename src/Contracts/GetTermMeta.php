<?php

namespace WpService\Contracts;

interface GetTermMeta
{
/**
 * Retrieves metadata for a term.
 *
 * @since 4.4.0
 *
 * @param int $termId Term ID.
 * @param string $key     Optional. The meta key to retrieve. By default,
 *                        returns data for all keys. Default empty.
 * @param bool $single  Optional. Whether to return a single value.
 *                        This parameter has no effect if `$key` is not specified.
 *                        Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of the meta field if `$single` is true.
 *               False for an invalid `$term_id` (non-numeric, zero, or negative value).
 *               An empty string if a valid but non-existing term ID is passed.
 */
    public function getTermMeta(int $termId, string $key = '', bool $single = false): mixed;
}
