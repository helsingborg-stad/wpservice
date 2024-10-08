<?php

namespace WpService\Contracts;

interface SanitizeMimeType
{
    /**
     * Sanitizes a mime type
     *
     * @since 3.1.3
     *
     * @param string $mimeType Mime type.
     * @return string Sanitized mime type.
     */
    public function sanitizeMimeType(string $mimeType): string;
}
