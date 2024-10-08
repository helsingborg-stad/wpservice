<?php

namespace WpService\Contracts;

interface WpGetNavMenuName
{
    /**
 * Returns the name of a navigation menu.
 *
 * @since 4.9.0
 *
 * @param string $location Menu location identifier.
 * @return string Menu name.
 */
    public function wpGetNavMenuName(string $location): string;
}
