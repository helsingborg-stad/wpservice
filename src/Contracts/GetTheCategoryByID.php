<?php

namespace WpService\Contracts;

interface GetTheCategoryByID
{
    /**
     * Retrieves category name based on category ID.
     *
     * @since 0.71
     *
     * @param int $catId Category ID.
     * @return string|\WP_Error Category name on success, WP_Error on failure.
     */
    public function getTheCategoryByID(int $catId): string|\WP_Error;
}
