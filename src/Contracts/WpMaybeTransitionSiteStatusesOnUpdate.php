<?php

namespace WpService\Contracts;

interface WpMaybeTransitionSiteStatusesOnUpdate
{
    /**
     * Triggers actions on site status updates.
     *
     * @since 5.1.0
     *
     * @param \WP_Site $newSite The site object after the update.
     * @param \WP_Site|null $oldSite Optional. If $new_site has been updated, this must be the previous
     *                               state of that site. Default null.
     */
    public function wpMaybeTransitionSiteStatusesOnUpdate(\WP_Site $newSite, \WP_Site|null $oldSite = null): void;
}
