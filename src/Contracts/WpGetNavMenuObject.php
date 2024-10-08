<?php

namespace WpService\Contracts;

interface WpGetNavMenuObject
{
    /**
     * Returns a navigation menu object.
     *
     * @since 3.0.0
     *
     * @param int|string|\WP_Term $menu Menu ID, slug, name, or object.
     * @return \WP_Term|false Menu object on success, false if $menu param isn't supplied or term does not exist.
     */
    public function wpGetNavMenuObject(int|string|\WP_Term $menu): \WP_Term|false;
}
