<?php

namespace WpService\Contracts;

/**
 * Interface ApplyFilters
 *
 * This interface defines the contract for applying filters in WordPress.
 */
interface ApplyFilters
{
    /**
     * Apply filters to a value.
     *
     * @param string $hookName The name of the filter hook.
     * @param mixed $value The value to be filtered.
     * @param mixed  ...$args   Optional. Additional parameters to pass to the callback functions.
     * @return mixed The filtered value.
     */
    public function applyFilters(string $hookName, mixed $value, mixed ...$args): mixed;
}
