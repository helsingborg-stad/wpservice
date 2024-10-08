<?php

namespace WpService\Contracts;

interface DoingFilter
{
    /**
     * Returns whether or not a filter hook is currently being processed.
     *
     * The function current_filter() only returns the most recent filter being executed.
     * did_filter() returns the number of times a filter has been applied during
     * the current request.
     *
     * This function allows detection for any filter currently being executed
     * (regardless of whether it's the most recent filter to fire, in the case of
     * hooks called from hook callbacks) to be verified.
     *
     * @since 3.9.0
     *
     * @see current_filter()
     * @see did_filter()
     * @global string[] $wp_current_filter Current filter.
     *
     * @param string|null $hookName Optional. Filter hook to check. Defaults to null,
     *                               which checks if any filter is currently being run.
     * @return bool Whether the filter is currently in the stack.
     */
    public function doingFilter(string|null $hookName = null): bool;
}
