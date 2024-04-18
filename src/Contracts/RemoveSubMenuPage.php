<?php

namespace WpService\Contracts;

interface RemoveSubMenuPage
{
    /**
     * Remove a sub-menu page.
     *
     * @param string $parentSlug The parent menu slug.
     * @param string $menuSlug   The sub-menu slug.
     * @return array|false       An array of removed sub-menu page data or false on failure.
     */
    public function removeSubMenuPage(string $parentSlug, string $menuSlug): array|false;
}
