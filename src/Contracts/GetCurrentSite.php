<?php

namespace WpService\Contracts;

interface GetCurrentSite
{
    /**
 * Gets the current network.
 *
 * Returns an object containing the 'id', 'domain', 'path', and 'site_name'
 * properties of the network being viewed.
 *
 * @see wpmu_current_site()
 *
 * @since MU (3.0.0)
 *
 * @global WP_Network $current_site The current network.
 *
 * @return \WP_Network The current network.
 */
    public function getCurrentSite(): \WP_Network;
}
