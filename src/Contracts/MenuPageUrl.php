<?php

namespace WpService\Contracts;

interface MenuPageUrl
{
    /**
     * Gets the URL to access a particular menu page based on the slug it was registered with.
     *
     * If the slug hasn't been registered properly, no URL will be returned.
     *
     * @since 3.0.0
     *
     * @global array $_parent_pages
     *
     * @param string $menuSlug The slug name to refer to this menu by (should be unique for this menu).
     * @param bool $display   Optional. Whether or not to display the URL. Default true.
     * @return string The menu page URL.
     */
    public function menuPageUrl(string $menuSlug, bool $display = true): string;
}
