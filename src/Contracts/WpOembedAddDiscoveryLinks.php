<?php

namespace WpService\Contracts;

interface WpOembedAddDiscoveryLinks
{
/**
 * Adds oEmbed discovery links in the head element of the website.
 *
 * @since 4.4.0
 * @since 6.8.0 Output was adjusted to only embed if the post supports it.
 * @since 6.9.0 Now runs first at `wp_head` priority 4, with a fallback to priority 10. This helps ensure the discovery links appear within the first 150KB.
 */
    public function wpOembedAddDiscoveryLinks(): void;
}
