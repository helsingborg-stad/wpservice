<?php

namespace WpService\Contracts;

interface GetDefaultBlockCategories
{
    /**
 * Returns the list of default categories for block types.
 *
 * @since 5.8.0
 * @since 6.3.0 Reusable Blocks renamed to Patterns.
 *
 * @return array[] Array of categories for block types.
 */
    public function getDefaultBlockCategories(): array;
}
