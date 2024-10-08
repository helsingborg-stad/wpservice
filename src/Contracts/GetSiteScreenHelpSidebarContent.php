<?php

namespace WpService\Contracts;

interface GetSiteScreenHelpSidebarContent
{
    /**
 * Returns the content for the help sidebar on the Edit Site screens.
 *
 * @since 4.9.0
 *
 * @return string Help sidebar content.
 */
    public function getSiteScreenHelpSidebarContent(): string;
}
