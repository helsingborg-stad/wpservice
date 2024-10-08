<?php

namespace WpService\Contracts;

interface WpPrintRequestFilesystemCredentialsModal
{
    /**
     * Prints the filesystem credentials modal when needed.
     *
     * @since 4.2.0
     */
    public function wpPrintRequestFilesystemCredentialsModal(): void;
}
