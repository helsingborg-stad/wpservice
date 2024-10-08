<?php

namespace WpService\Contracts;

interface WpMaybeGrantSiteHealthCaps
{
    /**
     * Filters the user capabilities to grant the 'view_site_health_checks' capabilities as necessary.
     *
     * @since 5.2.2
     *
     * @param bool[] $allcaps An array of all the user's capabilities.
     * @param string[] $caps    Required primitive capabilities for the requested capability.
     * @param array $args {
     *     Arguments that accompany the requested capability check.
     *
     * @type string    $0 Requested capability.
     * @type int       $1 Concerned user ID.
     * @type mixed  ...$2 Optional second and further parameters, typically object ID.
     * }
     * @param \WP_User $user    The user object.
     * @return bool[] Filtered array of the user's capabilities.
     */
    public function wpMaybeGrantSiteHealthCaps(array $allcaps, array $caps, array $args, \WP_User $user): array;
}
