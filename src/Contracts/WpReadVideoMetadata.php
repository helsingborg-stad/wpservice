<?php

namespace WpService\Contracts;

interface WpReadVideoMetadata
{
    /**
 * Retrieves metadata from a video file's ID3 tags.
 *
 * @since 3.6.0
 *
 * @param string $file Path to file.
 * @return array|false Returns array of metadata, if found.
 */
    public function wpReadVideoMetadata(string $file): array|false;
}
