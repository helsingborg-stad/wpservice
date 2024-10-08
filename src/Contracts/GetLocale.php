<?php

namespace WpService\Contracts;

interface GetLocale
{
    /**
     * Retrieves the current locale.
     *
     * If the locale is set, then it will filter the locale in the {@see 'locale'}
     * filter hook and return the value.
     *
     * If the locale is not set already, then the WPLANG constant is used if it is
     * defined. Then it is filtered through the {@see 'locale'} filter hook and
     * the value for the locale global set and the locale is returned.
     *
     * The process to get the locale should only be done once, but the locale will
     * always be filtered using the {@see 'locale'} hook.
     *
     * @since 1.5.0
     *
     * @global string $locale           The current locale.
     * @global string $wp_local_package Locale code of the package.
     *
     * @return string The locale of the blog or from the {@see 'locale'} hook.
     */
    public function getLocale(): string;
}
