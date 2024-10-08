<?php

namespace WpService\Contracts;

interface CleanCategoryCache
{
    /**
     * Removes the category cache data based on ID.
     *
     * @since 2.1.0
     *
     * @param int $id Category ID
     */
    public function cleanCategoryCache(int $id): void;
}
