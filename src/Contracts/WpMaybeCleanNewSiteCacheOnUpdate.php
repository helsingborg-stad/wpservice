<?php

namespace WpService\Contracts;

interface WpMaybeCleanNewSiteCacheOnUpdate
{
    /**
     * Cleans the necessary caches after specific site data has been updated.
     *
     * @since 5.1.0
     *
     * @param \WP_Site $newSite The site object after the update.
     * @param \WP_Site $oldSite The site object prior to the update.
     */
    public function wpMaybeCleanNewSiteCacheOnUpdate(\WP_Site $newSite, \WP_Site $oldSite): void;
}
