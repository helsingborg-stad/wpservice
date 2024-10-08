<?php

namespace WpService\Contracts;

interface GetCategoryToEdit
{
    /**
     * Gets category object for given ID and 'edit' filter context.
     *
     * @since 2.0.0
     *
     * @param int $id
     * @return object
     */
    public function getCategoryToEdit(int $id): object;
}
