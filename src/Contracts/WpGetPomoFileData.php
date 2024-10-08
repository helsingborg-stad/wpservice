<?php

namespace WpService\Contracts;

interface WpGetPomoFileData
{
    /**
     * Extracts headers from a PO file.
     *
     * @since 3.7.0
     *
     * @param string $poFile Path to PO file.
     * @return string[] Array of PO file header values keyed by header name.
     */
    public function wpGetPomoFileData(string $poFile): array;
}
