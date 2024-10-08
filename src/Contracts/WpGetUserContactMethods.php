<?php

namespace WpService\Contracts;

interface WpGetUserContactMethods
{
    /**
 * Sets up the user contact methods.
 *
 * Default contact methods were removed in 3.6. A filter dictates contact methods.
 *
 * @since 3.7.0
 *
 * @param \WP_User|null $user Optional. WP_User object.
 * @return string[] Array of contact method labels keyed by contact method.
 */
    public function wpGetUserContactMethods(\WP_User|null $user): array;
}
