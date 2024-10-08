<?php

namespace WpService\Contracts;

interface WpmuSignupBlogNotification
{
    /**
 * Sends a confirmation request email to a user when they sign up for a new site. The new site will not become active
 * until the confirmation link is clicked.
 *
 * This is the notification function used when site registration
 * is enabled.
 *
 * Filter {@see 'wpmu_signup_blog_notification'} to bypass this function or
 * replace it with your own notification behavior.
 *
 * Filter {@see 'wpmu_signup_blog_notification_email'} and
 * {@see 'wpmu_signup_blog_notification_subject'} to change the content
 * and subject line of the email sent to newly registered users.
 *
 * @since MU (3.0.0)
 *
 * @param string $domain     The new blog domain.
 * @param string $path       The new blog path.
 * @param string $title      The site title.
 * @param string $userLogin The user's login name.
 * @param string $userEmail The user's email address.
 * @param string $key        The activation key created in wpmu_signup_blog().
 * @param array $meta       Optional. Signup meta data. By default, contains the requested privacy setting and lang_id.
 * @return bool
 */
    public function wpmuSignupBlogNotification(string $domain, string $path, string $title, string $userLogin, string $userEmail, string $key, array $meta): bool;
}
