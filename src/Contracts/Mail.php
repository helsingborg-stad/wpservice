<?php

namespace WpService\Contracts;

interface Mail
{
    /**
     * Sends an email, similar to PHP's mail function.
     *
     * A true return value does not automatically mean that the user received the
     * email successfully. It just only means that the method used was able to
     * process the request without any errors.
     *
     * The default content type is `text/plain` which does not allow using HTML.
     * However, you can set the content type of the email by using the
     * {@see 'wp_mail_content_type'} filter.
     *
     * The default charset is based on the charset used on the blog. The charset can
     * be set using the {@see 'wp_mail_charset'} filter.
     *
     * @global PHPMailer\PHPMailer\PHPMailer $phpmailer
     *
     * @param string|string[] $to          Array or comma-separated list of email addresses to send message.
     * @param string          $subject     Email subject.
     * @param string          $message     Message contents.
     * @param string|string[] $headers     Optional. Additional headers.
     * @param string|string[] $attachments Optional. Paths to files to attach.
     * @return bool Whether the email was sent successfully.
     */
    public function mail(
        string|array $to,
        string $subject,
        string $message,
        string|array $headers = '',
        string|array $attachments = array()
    ): bool;
}
