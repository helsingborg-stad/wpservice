<?php

namespace WpService\Contracts;

interface WpCreateCategory
{
    /**
 * Adds a new category to the database if it does not already exist.
 *
 * @since 2.0.0
 *
 * @param int|string $catName        Category name.
 * @param int $categoryParent Optional. ID of parent category.
 * @return int|\WP_Error
 */
    public function wpCreateCategory(int|string $catName, int $categoryParent): int|\WP_Error;
}
