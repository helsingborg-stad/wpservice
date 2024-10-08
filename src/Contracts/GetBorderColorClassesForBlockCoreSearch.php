<?php

namespace WpService\Contracts;

interface GetBorderColorClassesForBlockCoreSearch
{
    /**
 * Returns border color classnames depending on whether there are named or custom border colors.
 *
 * @since 5.9.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string The border color classnames to be applied to the block elements.
 */
    public function getBorderColorClassesForBlockCoreSearch(array $attributes): string;
}
