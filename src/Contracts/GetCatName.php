<?php

namespace WpService\Contracts;

interface GetCatName
{
    /**
 * Retrieves the name of a category from its ID.
 *
 * @since 1.0.0
 *
 * @param int $catId Category ID.
 * @return string Category name, or an empty string if the category doesn't exist.
 */
    public function getCatName(int $catId): string;
}
