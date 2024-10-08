<?php

namespace WpService\Contracts;

interface GetHeaderVideoUrl
{
    /**
 * Retrieves header video URL for custom header.
 *
 * Uses a local video if present, or falls back to an external video.
 *
 * @since 4.7.0
 *
 * @return string|false Header video URL or false if there is no video.
 */
    public function getHeaderVideoUrl(): string|false;
}
