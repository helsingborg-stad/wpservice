<?php

namespace WpService\Contracts;

interface WpMaybeUpdateNetworkSiteCountsOnUpdate
{
    /**
     * Updates the count of sites for a network based on a changed site.
     *
     * @since 5.1.0
     *
     * @param \WP_Site $newSite The site object that has been inserted, updated or deleted.
     * @param \WP_Site|null $oldSite Optional. If $new_site has been updated, this must be the previous
     *                               state of that site. Default null.
     */
    public function wpMaybeUpdateNetworkSiteCountsOnUpdate(\WP_Site $newSite, \WP_Site|null $oldSite = null): void;
}
