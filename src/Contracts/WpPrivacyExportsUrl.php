<?php

namespace WpService\Contracts;

interface WpPrivacyExportsUrl
{
    /**
     * Returns the URL of the directory used to store personal data export files.
     *
     * @since 4.9.6
     *
     * @see wp_privacy_exports_dir
     *
     * @return string Exports directory URL.
     */
    public function wpPrivacyExportsUrl(): string;
}
