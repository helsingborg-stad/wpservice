<?php

namespace WpService\Contracts;

interface ClassnamesForBlockCoreSearch
{
    /**
     * Builds the correct top level classnames for the 'core/search' block.
     *
     * @since 5.6.0
     *
     * @param array $attributes The block attributes.
     *
     * @return string The classnames used in the block.
     */
    public function classnamesForBlockCoreSearch(array $attributes): string;
}
