<?php

namespace WpService\Contracts;

interface WpGetWidgetDefaults
{
    /**
 * Retrieve default registered sidebars list.
 *
 * @since 2.2.0
 * @access private
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @return array
 */
    public function wpGetWidgetDefaults(): array;
}
