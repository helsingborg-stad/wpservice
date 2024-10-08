<?php

namespace WpService\Contracts;

interface WpRemovableQueryArgs
{
    /**
 * Returns an array of single-use query variable names that can be removed from a URL.
 *
 * @since 4.4.0
 *
 * @return string[] An array of query variable names to remove from the URL.
 */
    public function wpRemovableQueryArgs(): array;
}
