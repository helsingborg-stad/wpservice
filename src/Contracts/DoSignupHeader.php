<?php

namespace WpService\Contracts;

interface DoSignupHeader
{
/**
 * Prints signup_header via wp_head.
 *
 * @since MU (3.0.0)
 */
    public function doSignupHeader(): void;
}
