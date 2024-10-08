<?php

namespace WpService\Contracts;

interface WpmuWelcomeNotification
{
    /**
 * Notifies the site administrator that their site activation was successful.
 *
 * Filter {@see 'wpmu_welcome_notification'} to disable or bypass.
 *
 * Filter {@see 'update_welcome_email'} and {@see 'update_welcome_subject'} to
 * modify the content and subject line of the notification email.
 *
 * @since MU (3.0.0)
 *
 * @param int $blogId  Site ID.
 * @param int $userId  User ID.
 * @param string $password User password, or "N/A" if the user account is not new.
 * @param string $title    Site title.
 * @param array $meta     Optional. Signup meta data. By default, contains the requested privacy setting and lang_id.
 * @return bool Whether the email notification was sent.
 */
    public function wpmuWelcomeNotification(int $blogId, int $userId, string $password, string $title, array $meta = []): bool;
}
