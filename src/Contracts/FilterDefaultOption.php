<?php

namespace WpService\Contracts;

interface FilterDefaultOption
{
    /**
     * Filters the default value for the option.
     *
     * For settings which register a default setting in `register_setting()`, this
     * function is added as a filter to `default_option_{$option}`.
     *
     * @since 4.7.0
     *
     * @param mixed $defaultValue  Existing default value to return.
     * @param string $option         Option name.
     * @param bool $passedDefault Was `get_option()` passed a default value?
     * @return mixed Filtered default value.
     */
    public function filterDefaultOption(mixed $defaultValue, string $option, bool $passedDefault): mixed;
}
