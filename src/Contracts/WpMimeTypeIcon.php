<?php

namespace WpService\Contracts;

interface WpMimeTypeIcon
{
    /**
     * Retrieves the icon for a MIME type or attachment.
     *
     * @since 2.1.0
     * @since 6.5.0 Added the `$preferred_ext` parameter.
     *
     * @param string|int $mime          MIME type or attachment ID.
     * @param string $preferredExt File format to prefer in return. Default '.png'.
     * @return string|false Icon, false otherwise.
     */
    public function wpMimeTypeIcon(string|int $mime = 0, string $preferredExt = '.png'): string|false;
}
