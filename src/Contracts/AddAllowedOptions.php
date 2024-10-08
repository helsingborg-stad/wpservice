<?php

namespace WpService\Contracts;

interface AddAllowedOptions
{
    /**
 * Adds an array of options to the list of allowed options.
 *
 * @since 5.5.0
 *
 * @global array $allowed_options
 *
 * @param array $newOptions
 * @param string|array $options
 * @return array
 */
    public function addAllowedOptions(array $newOptions, string|array $options): array;
}
