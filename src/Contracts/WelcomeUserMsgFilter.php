<?php

namespace WpService\Contracts;

interface WelcomeUserMsgFilter
{
/**
 * Ensures that the welcome message is not empty. Currently unused.
 *
 * @since MU (3.0.0)
 *
 * @param string $text
 * @return string
 */
    public function welcomeUserMsgFilter(string $text): string;
}
