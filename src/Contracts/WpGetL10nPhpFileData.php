<?php

namespace WpService\Contracts;

interface WpGetL10nPhpFileData
{
    /**
     * Extracts headers from a PHP translation file.
     *
     * @since 6.6.0
     *
     * @param string $phpFile Path to a `.l10n.php` file.
     * @return string[] Array of file header values keyed by header name.
     */
    public function wpGetL10nPhpFileData(string $phpFile): array;
}
