<?php

namespace WpService\Contracts;

interface WpOembedRemoveProvider
{
    /**
     * Removes an oEmbed provider.
     *
     * @since 3.5.0
     *
     * @see WP_oEmbed
     *
     * @param string $format The URL format for the oEmbed provider to remove.
     * @return bool Was the provider removed successfully?
     */
    public function wpOembedRemoveProvider(string $format): bool;
}
