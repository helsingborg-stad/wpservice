<?php

namespace WpService\Contracts;

interface WpSendNewUserNotifications
{
    /**
     * Initiates email notifications related to the creation of new users.
     *
     * Notifications are sent both to the site admin and to the newly created user.
     *
     * @since 4.4.0
     * @since 4.6.0 Converted the `$notify` parameter to accept 'user' for sending
     *              notifications only to the user created.
     *
     * @param int $userId ID of the newly created user.
     * @param string $notify  Optional. Type of notification that should happen. Accepts 'admin'
     *                        or an empty string (admin only), 'user', or 'both' (admin and user).
     *                        Default 'both'.
     */
    public function wpSendNewUserNotifications(int $userId, string $notify = 'both'): void;
}
