<?php

namespace WpService\Contracts;

interface WpNavMenuMaxDepth
{
/**
 * @since 3.0.0
 *
 * @global int $_wp_nav_menu_max_depth
 *
 * @param string $classes
 * @return string
 */
    public function wpNavMenuMaxDepth(string $classes): string;
}
