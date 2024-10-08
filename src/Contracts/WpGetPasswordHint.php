<?php

namespace WpService\Contracts;

interface WpGetPasswordHint
{
    /**
 * Gets the text suggesting how to create strong passwords.
 *
 * @since 4.1.0
 *
 * @return string The password hint text.
 */
    public function wpGetPasswordHint(): string;
}
