<?php

namespace WpService\Contracts;

interface SignupGetAvailableLanguages
{
/**
 * Retrieves languages available during the site/user sign-up process.
 *
 * @since 4.4.0
 *
 * @see get_available_languages()
 *
 * @return string[] Array of available language codes. Language codes are formed by
 *                  stripping the .mo extension from the language file names.
 */
    public function signupGetAvailableLanguages(): array;
}
