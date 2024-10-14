<?php

namespace WpService\Contracts;

interface GetObjectsInTerm
{
/**
 * Retrieves object IDs of valid taxonomy and term.
 *
 * The strings of `$taxonomies` must exist before this function will continue.
 * On failure of finding a valid taxonomy, it will return a WP_Error.
 *
 * The `$terms` aren't checked the same as `$taxonomies`, but still need to exist
 * for object IDs to be returned.
 *
 * It is possible to change the order that object IDs are returned by using `$args`
 * with either ASC or DESC array. The value should be in the key named 'order'.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|int[] $termIds   Term ID or array of term IDs of terms that will be used.
 * @param string|string[] $taxonomies String of taxonomy name or Array of string values of taxonomy names.
 * @param array|string $args       {
 *     Change the order of the object IDs.
 *
 * @type string $order Order to retrieve terms. Accepts 'ASC' or 'DESC'. Default 'ASC'.
 * }
 * @return string[]|WP_Error An array of object IDs as numeric strings on success,
 *                           WP_Error if the taxonomy does not exist.
 */
    public function getObjectsInTerm(int|array $termIds, string|array $taxonomies, array|string $args = []): array|\WP_Error;
}
