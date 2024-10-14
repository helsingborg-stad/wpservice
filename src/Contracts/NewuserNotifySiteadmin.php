<?php

namespace WpService\Contracts;

interface NewuserNotifySiteadmin
{
/**
 * Notifies the network admin that a new user has been activated.
 *
 * Filter {@see 'newuser_notify_siteadmin'} to change the content of
 * the notification email.
 *
 * @since MU (3.0.0)
 *
 * @param int $userId The new user's ID.
 * @return bool
 */
    public function newuserNotifySiteadmin(int $userId): bool;
}
