<?php

namespace WpService\Contracts;

interface RemoveAllowedOptions
{
    /**
     * Removes a list of options from the allowed options list.
     *
     * @since 5.5.0
     *
     * @global array $allowed_options
     *
     * @param array $delOptions
     * @param string|array $options
     * @return array
     */
    public function removeAllowedOptions(array $delOptions, string|array $options = ''): array;
}
