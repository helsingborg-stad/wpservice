<?php

namespace WpService\Contracts;

interface DomainExists
{
    /**
 * Checks whether a site name is already taken.
 *
 * The name is the site's subdomain or the site's subdirectory
 * path depending on the network settings.
 *
 * Used during the new site registration process to ensure
 * that each site name is unique.
 *
 * @since MU (3.0.0)
 *
 * @param string $domain     The domain to be checked.
 * @param string $path       The path to be checked.
 * @param int $networkId Optional. Network ID. Only relevant on multi-network installations.
 *                           Default 1.
 * @return int|null The site ID if the site name exists, null otherwise.
 */
    public function domainExists(string $domain, string $path, int $networkId = 1): int|null;
}
