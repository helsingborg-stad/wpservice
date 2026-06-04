<?php

namespace WpService\Contracts;

interface WpGetDefaultExtensionForMimeType
{
/**
 * Returns the first matched extension for the mime type, as mapped from wp_get_mime_types().
 *
 * @since 5.8.1
 *
 * @param string $mimeType The mime type to search.
 * @return string|false The first matching file extension, or false if no extensions are found
 *                      for the given mime type.
 */
    public function wpGetDefaultExtensionForMimeType(string $mimeType): string|false;
}
