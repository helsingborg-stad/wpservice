<?php

namespace WpService\Contracts;

interface WpGetSidebar
{
/**
 * Retrieves the registered sidebar with the given ID.
 *
 * @since 5.9.0
 *
 * @global array $wp_registered_sidebars The registered sidebars.
 *
 * @param string $id The sidebar ID.
 * @return array|null The discovered sidebar, or null if it is not registered.
 */
    public function wpGetSidebar(string $id): array|null;
}
