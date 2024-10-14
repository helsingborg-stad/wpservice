<?php

namespace WpService\Contracts;

interface KsesRemoveFilters
{
/**
 * Removes all KSES input form content filters.
 *
 * A quick procedural method to removing all of the filters that KSES uses for
 * content in WordPress Loop.
 *
 * Does not remove the `kses_init()` function from {@see 'init'} hook (priority is
 * default). Also does not remove `kses_init()` function from {@see 'set_current_user'}
 * hook (priority is also default).
 *
 * @since 2.0.6
 */
    public function ksesRemoveFilters(): void;
}
