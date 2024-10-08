<?php

namespace WpService\Contracts;

interface AtomSiteIcon
{
    /**
 * Displays Site Icon in atom feeds.
 *
 * @since 4.3.0
 *
 * @see get_site_icon_url()
 */
    public function atomSiteIcon(): void;
}
