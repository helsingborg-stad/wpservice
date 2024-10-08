<?php

namespace WpService\Contracts;

interface GetColorClassesForBlockCoreSearch
{
    /**
     * Returns color classnames depending on whether there are named or custom text and background colors.
     *
     * @since 5.9.0
     *
     * @param array $attributes The block attributes.
     *
     * @return string The color classnames to be applied to the block elements.
     */
    public function getColorClassesForBlockCoreSearch(array $attributes): string;
}
