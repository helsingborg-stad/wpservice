<?php

namespace WpService\Contracts;

interface PopulateNetwork
{
    /**
 * Populate network settings.
 *
 * @since 3.0.0
 *
 * @global wpdb       $wpdb         WordPress database abstraction object.
 * @global object     $current_site
 * @global WP_Rewrite $wp_rewrite   WordPress rewrite component.
 *
 * @param int $networkId        ID of network to populate.
 * @param string $domain            The domain name for the network. Example: "example.com".
 * @param string $email             Email address for the network administrator.
 * @param string $siteName         The name of the network.
 * @param string $path              Optional. The path to append to the network's domain name. Default '/'.
 * @param bool $subdomainInstall Optional. Whether the network is a subdomain installation or a subdirectory installation.
 *                                  Default false, meaning the network is a subdirectory installation.
 * @return true|\WP_Error True on success, or WP_Error on warning (with the installation otherwise successful,
 *                       so the error code must be checked) or failure.
 */
    public function populateNetwork(int $networkId = 1, string $domain = '', string $email = '', string $siteName = '', string $path = '/', bool $subdomainInstall = false): true|\WP_Error;
}
