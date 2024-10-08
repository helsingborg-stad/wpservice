<?php

namespace WpService\Contracts;

interface GetDynamicBlockNames
{
    /**
 * Returns an array of the names of all registered dynamic block types.
 *
 * @since 5.0.0
 *
 * @return string[] Array of dynamic block names.
 */
    public function getDynamicBlockNames(): array;
}
