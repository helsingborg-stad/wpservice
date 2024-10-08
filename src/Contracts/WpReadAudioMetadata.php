<?php

namespace WpService\Contracts;

interface WpReadAudioMetadata
{
    /**
 * Retrieves metadata from an audio file's ID3 tags.
 *
 * @since 3.6.0
 *
 * @param string $file Path to file.
 * @return array|false Returns array of metadata, if found.
 */
    public function wpReadAudioMetadata(string $file): array|false;
}
