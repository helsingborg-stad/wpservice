<?php

namespace WpService\Contracts;

interface WpNavMenuMaxDepth
{
    /**
 * @global int $_wp_nav_menu_max_depth
 *
 * @param string $classes
 * @return string
 */
    public function wpNavMenuMaxDepth(string $classes): string;
}
