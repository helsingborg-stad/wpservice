<?php

namespace WpService\Contracts;

interface WpPasswordChangeNotification
{
/**
 * Notifies the blog admin of a user changing password, normally via email.
 *
 * @since 2.7.0
 *
 * @param \WP_User $user User object.
 */
    public function wpPasswordChangeNotification(\WP_User $user): void;
}
