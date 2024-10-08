<?php

namespace WpService\Contracts;

interface WpmuActivateSignup
{
    /**
 * Activates a signup.
 *
 * Hook to {@see 'wpmu_activate_user'} or {@see 'wpmu_activate_blog'} for events
 * that should happen only when users or sites are self-created (since
 * those actions are not called when users and sites are created
 * by a Super Admin).
 *
 * @since MU (3.0.0)
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $key The activation key provided to the user.
 * @return array|\WP_Error An array containing information about the activated user and/or blog.
 */
    public function wpmuActivateSignup(string $key): array|\WP_Error;
}
