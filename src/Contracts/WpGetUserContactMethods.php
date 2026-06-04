<?php

namespace WpService\Contracts;

interface WpGetUserContactMethods
{
/**
 * Sets up the user contact methods.
 *
 * Default contact methods were removed for new installations in WordPress 3.6
 * and completely removed from the codebase in WordPress 6.9.
 *
 * Use the {@see 'user_contactmethods'} filter to add or remove contact methods.
 *
 * @since 3.7.0
 * @since 6.9.0 Removed references to `aim`, `jabber`, and `yim` contact methods.
 *
 * @param \WP_User|null $user Optional. WP_User object.
 * @return string[] Array of contact method labels keyed by contact method.
 */
    public function wpGetUserContactMethods(\WP_User|null $user = null): array;
}
