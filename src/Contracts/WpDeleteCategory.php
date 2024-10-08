<?php

namespace WpService\Contracts;

interface WpDeleteCategory
{
    /**
 * Deletes one existing category.
 *
 * @since 2.0.0
 *
 * @param int $catId Category term ID.
 * @return bool|int|\WP_Error Returns true if completes delete action; false if term doesn't exist;
 *                           Zero on attempted deletion of default Category; WP_Error object is
 *                           also a possibility.
 */
    public function wpDeleteCategory(int $catId): bool|int|\WP_Error;
}
