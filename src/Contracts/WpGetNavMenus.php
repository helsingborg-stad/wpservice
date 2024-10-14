<?php

namespace WpService\Contracts;

interface WpGetNavMenus
{
/**
 * Returns all navigation menu objects.
 *
 * @since 3.0.0
 * @since 4.1.0 Default value of the 'orderby' argument was changed from 'none'
 *              to 'name'.
 *
 * @param array $args Optional. Array of arguments passed on to get_terms().
 *                    Default empty array.
 * @return WP_Term[] An array of menu objects.
 */
    public function wpGetNavMenus(array $args = []): array;
}
