<?php

namespace WpService\Contracts;

interface CategoryExists
{
    /**
     * Checks whether a category exists.
     *
     * @since 2.0.0
     *
     * @see term_exists()
     *
     * @param int|string $catName        Category name.
     * @param int $categoryParent Optional. ID of parent category.
     * @return string|null Returns the category ID as a numeric string if the pairing exists, null if not.
     */
    public function categoryExists(int|string $catName, int $categoryParent = null): string|null;
}
