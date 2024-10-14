<?php

namespace WpService\Contracts;

interface GetCategoryBySlug
{
/**
 * Retrieves a category object by category slug.
 *
 * @since 2.3.0
 *
 * @param string $slug The category slug.
 * @return object|false Category data object on success, false if not found.
 */
    public function getCategoryBySlug(string $slug): object|false;
}
