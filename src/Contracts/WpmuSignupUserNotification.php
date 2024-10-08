<?php

namespace WpService\Contracts;

interface WpmuSignupUserNotification
{
    /**
 * Sends a confirmation request email to a user when they sign up for a new user account (without signing up for a site
 * at the same time). The user account will not become active until the confirmation link is clicked.
 *
 * This is the notification function used when no new site has
 * been requested.
 *
 * Filter {@see 'wpmu_signup_user_notification'} to bypass this function or
 * replace it with your own notification behavior.
 *
 * Filter {@see 'wpmu_signup_user_notification_email'} and
 * {@see 'wpmu_signup_user_notification_subject'} to change the content
 * and subject line of the email sent to newly registered users.
 *
 * @since MU (3.0.0)
 *
 * @param string $userLogin The user's login name.
 * @param string $userEmail The user's email address.
 * @param string $key        The activation key created in wpmu_signup_user()
 * @param array $meta       Optional. Signup meta data. Default empty array.
 * @return bool
 */
    public function wpmuSignupUserNotification(string $userLogin, string $userEmail, string $key, array $meta): bool;
}
