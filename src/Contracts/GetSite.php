<?php

namespace WpService\Contracts;

interface GetSite
{
    /**
 * Retrieves site data given a site ID or site object.
 *
 * Site data will be cached and returned after being passed through a filter.
 * If the provided site is empty, the current site global will be used.
 *
 * @since 4.6.0
 *
 * @param \WP_Site|int|null $site Optional. Site to retrieve. Default is the current site.
 * @return \WP_Site|null The site object or null if not found.
 */
    public function getSite(\WP_Site|int|null $site = null): \WP_Site|null;
}
