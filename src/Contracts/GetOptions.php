<?php

namespace WpService\Contracts;

interface GetOptions
{
    /**
 * Retrieves multiple options.
 *
 * Options are loaded as necessary first in order to use a single database query at most.
 *
 * @since 6.4.0
 *
 * @param string[] $options An array of option names to retrieve.
 * @return array An array of key-value pairs for the requested options.
 */
    public function getOptions(array $options): array;
}
