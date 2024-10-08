<?php

namespace WpService\Contracts;

interface WpInstallLanguageForm
{
    /**
     * Output the select form for the language selection on the installation screen.
     *
     * @since 4.0.0
     *
     * @global string $wp_local_package Locale code of the package.
     *
     * @param array[] $languages Array of available languages (populated via the Translation API).
     */
    public function wpInstallLanguageForm(array $languages): void;
}
