<?php

namespace WpService\Contracts;

interface DidFilter
{
    /**
 * Retrieves the number of times a filter has been applied during the current request.
 *
 * @since 6.1.0
 *
 * @global int[] $wp_filters Stores the number of times each filter was triggered.
 *
 * @param string $hookName The name of the filter hook.
 * @return int The number of times the filter hook has been applied.
 */
    public function didFilter(string $hookName): int;
}
