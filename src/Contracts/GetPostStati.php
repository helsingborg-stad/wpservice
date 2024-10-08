<?php

namespace WpService\Contracts;

interface GetPostStati
{
    /**
 * Gets a list of post statuses.
 *
 * @since 3.0.0
 *
 * @global stdClass[] $wp_post_statuses List of post statuses.
 *
 * @see register_post_status()
 *
 * @param array|string $args     Optional. Array or string of post status arguments to compare against
 *                               properties of the global `$wp_post_statuses objects`. Default empty array.
 * @param string $output   Optional. The type of output to return, either 'names' or 'objects'. Default 'names'.
 * @param string $operator Optional. The logical operation to perform. 'or' means only one element
 *                               from the array needs to match; 'and' means all elements must match.
 *                               Default 'and'.
 * @return string[]|stdClass[] A list of post status names or objects.
 */
    public function getPostStati(array|string $args, string $output, string $operator): array;
}
