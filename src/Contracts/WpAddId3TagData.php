<?php

namespace WpService\Contracts;

interface WpAddId3TagData
{
    /**
 * Parses ID3v2, ID3v1, and getID3 comments to extract usable data.
 *
 * @since 3.6.0
 *
 * @param array $metadata An existing array with data.
 * @param array $data Data supplied by ID3 tags.
 */
    public function wpAddId3TagData(array $metadata, array $data): void;
}
