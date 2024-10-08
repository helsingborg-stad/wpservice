<?php

namespace WpService\Contracts;

interface MsLoadCurrentSiteAndNetwork
{
    /**
 * Identifies the network and site of a requested domain and path and populates the
 * corresponding network and site global objects as part of the multisite bootstrap process.
 *
 * Prior to 4.6.0, this was a procedural block in `ms-settings.php`. It was wrapped into
 * a function to facilitate unit tests. It should not be used outside of core.
 *
 * Usually, it's easier to query the site first, which then declares its network.
 * In limited situations, we either can or must find the network first.
 *
 * If a network and site are found, a `true` response will be returned so that the
 * request can continue.
 *
 * If neither a network or site is found, `false` or a URL string will be returned
 * so that either an error can be shown or a redirect can occur.
 *
 * @since 4.6.0
 * @access private
 *
 * @global WP_Network $current_site The current network.
 * @global WP_Site    $current_blog The current site.
 *
 * @param string $domain    The requested domain.
 * @param string $path      The requested path.
 * @param bool $subdomain Optional. Whether a subdomain (true) or subdirectory (false) configuration.
 *                          Default false.
 * @return bool|string True if bootstrap successfully populated `$current_blog` and `$current_site`.
 *                     False if bootstrap could not be properly completed.
 *                     Redirect URL if parts exist, but the request as a whole can not be fulfilled.
 */
    public function msLoadCurrentSiteAndNetwork(string $domain, string $path, bool $subdomain): bool|string;
}
