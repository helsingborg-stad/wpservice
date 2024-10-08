<?php

namespace WpService\Contracts;

interface WpSwitchRolesAndUser
{
    /**
     * Switches the initialized roles and current user capabilities to another site.
     *
     * @since 4.9.0
     *
     * @param int $newSiteId New site ID.
     * @param int $oldSiteId Old site ID.
     */
    public function wpSwitchRolesAndUser(int $newSiteId, int $oldSiteId): void;
}
