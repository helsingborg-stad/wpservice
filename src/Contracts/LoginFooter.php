<?php

namespace WpService\Contracts;

interface LoginFooter
{
/**
 * Outputs the footer for the login page.
 *
 * @since 3.1.0
 *
 * @global bool|string $interim_login Whether interim login modal is being displayed. String 'success'
 *                                    upon successful login.
 *
 * @param string $inputId Which input to auto-focus.
 */
    public function loginFooter(string $inputId = ''): void;
}
