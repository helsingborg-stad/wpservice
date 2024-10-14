<?php

namespace WpService\Contracts;

interface GetBlogCount
{
/**
 * Gets the number of active sites on the installation.
 *
 * The count is cached and updated twice daily. This is not a live count.
 *
 * @since MU (3.0.0)
 * @since 3.7.0 The `$network_id` parameter has been deprecated.
 * @since 4.8.0 The `$network_id` parameter is now being used.
 *
 * @param int|null $networkId ID of the network. Default is the current network.
 * @return int Number of active sites on the network.
 */
    public function getBlogCount(int|null $networkId = null): int;
}
