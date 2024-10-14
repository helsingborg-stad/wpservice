<?php

namespace WpService\Contracts;

interface GetTypographyClassesForBlockCoreSearch
{
/**
 * Returns typography classnames depending on whether there are named font sizes/families.
 *
 * @since 6.1.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string The typography color classnames to be applied to the block elements.
 */
    public function getTypographyClassesForBlockCoreSearch(array $attributes): string;
}
