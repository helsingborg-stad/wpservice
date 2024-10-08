<?php

namespace WpService\Contracts;

interface WpDeleteNavMenu
{
    /**
 * Deletes a navigation menu.
 *
 * @since 3.0.0
 *
 * @param int|string|\WP_Term $menu Menu ID, slug, name, or object.
 * @return bool|\WP_Error True on success, false or WP_Error object on failure.
 */
    public function wpDeleteNavMenu(int|string|\WP_Term $menu): bool|\WP_Error;
}
