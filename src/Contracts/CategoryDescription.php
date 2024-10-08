<?php

namespace WpService\Contracts;

interface CategoryDescription
{
    /**
 * Retrieves category description.
 *
 * @since 1.0.0
 *
 * @param int $category Optional. Category ID. Defaults to the current category ID.
 * @return string Category description, if available.
 */
    public function categoryDescription(int $category = 0): string;
}
