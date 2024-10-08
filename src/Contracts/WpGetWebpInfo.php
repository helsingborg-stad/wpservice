<?php

namespace WpService\Contracts;

interface WpGetWebpInfo
{
    /**
 * Extracts meta information about a WebP file: width, height, and type.
 *
 * @since 5.8.0
 *
 * @param string $filename Path to a WebP file.
 * @return array {
 *     An array of WebP image information.
 *
 *     @type int|false    $width  Image width on success, false on failure.
 *     @type int|false    $height Image height on success, false on failure.
 *     @type string|false $type   The WebP type: one of 'lossy', 'lossless' or 'animated-alpha'.
 *                                False on failure.
 * }
 */
    public function wpGetWebpInfo(string $filename): array;
}
