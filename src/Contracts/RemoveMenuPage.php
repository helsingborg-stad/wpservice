<?php

namespace WpService\Contracts;

interface RemoveMenuPage
{
    /**
     * Remove a menu page.
     *
     * @param string $menuSlug The slug of the menu page to remove.
     * @return array|false Returns an array of removed menu page data or false on failure.
     */
    public function removeMenuPage(string $menuSlug): array|false;
}
