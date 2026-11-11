<?php

namespace WpService\Contracts;

interface FixPhpmailerMessageid
{
/**
 * Corrects From host on outgoing mail to match the site domain.
 *
 * @since MU (3.0.0)
 *
 * @param \PHPMailer\PHPMailer\PHPMailer $phpmailer The PHPMailer instance (passed by reference).
 */
    public function fixPhpmailerMessageid(\PHPMailer\PHPMailer\PHPMailer $phpmailer): void;
}
