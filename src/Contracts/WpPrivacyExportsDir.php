<?php

namespace WpService\Contracts;

interface WpPrivacyExportsDir
{
    /**
     * Returns the directory used to store personal data export files.
     *
     * @since 4.9.6
     *
     * @see wp_privacy_exports_url
     *
     * @return string Exports directory.
     */
    public function wpPrivacyExportsDir(): string;
}
