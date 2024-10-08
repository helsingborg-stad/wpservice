<?php

namespace WpService\Contracts;

interface OptionUpdateFilter
{
    /**
     * Refreshes the value of the allowed options list available via the 'allowed_options' hook.
     *
     * See the {@see 'allowed_options'} filter.
     *
     * @since 2.7.0
     * @since 5.5.0 `$new_whitelist_options` was renamed to `$new_allowed_options`.
     *              Please consider writing more inclusive code.
     *
     * @global array $new_allowed_options
     *
     * @param array $options
     * @return array
     */
    public function optionUpdateFilter(array $options): array;
}
