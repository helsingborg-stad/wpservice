<?php

namespace WpService\Contracts;

interface WpGetDefaultExtensionForMimeType
{
    /**
 * Returns first matched extension for the mime-type,
 * as mapped from wp_get_mime_types().
 *
 * @since 5.8.1
 *
 * @param string $mimeType
 *
 * @return string|false
 */
    public function wpGetDefaultExtensionForMimeType(string $mimeType): string|false;
}
