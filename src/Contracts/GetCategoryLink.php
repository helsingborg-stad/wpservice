<?php

namespace WpService\Contracts;

interface GetCategoryLink
{
    /**
 * Retrieves category link URL.
 *
 * @since 1.0.0
 *
 * @see get_term_link()
 *
 * @param int|object $category Category ID or object.
 * @return string Link on success, empty string if category does not exist.
 */
    public function getCategoryLink(int|object $category): string;
}
