<?php

namespace WpService\Contracts;

interface WpOembedAddDiscoveryLinks
{
    /**
 * Adds oEmbed discovery links in the head element of the website.
 *
 * @since 4.4.0
 */
    public function wpOembedAddDiscoveryLinks(): void;
}
