<?php

namespace WpService\Contracts;

interface AdminCreatedUserEmail
{
/**
 * @since MU (3.0.0)
 *
 * @param string $text
 * @return string
 */
    public function adminCreatedUserEmail(string $text): string;
}
