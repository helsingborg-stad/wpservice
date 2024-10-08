<?php

namespace WpService\Contracts;

interface GetCatID
{
    /**
 * Retrieves the ID of a category from its name.
 *
 * @since 1.0.0
 *
 * @param string $catName Category name.
 * @return int Category ID on success, 0 if the category doesn't exist.
 */
    public function getCatID(string $catName): int;
}
