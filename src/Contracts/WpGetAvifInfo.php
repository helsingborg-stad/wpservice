<?php

namespace WpService\Contracts;

interface WpGetAvifInfo
{
/**
 * Extracts meta information about an AVIF file: width, height, bit depth, and number of channels.
 *
 * @since 6.5.0
 *
 * @param string $filename Path to an AVIF file.
 * @return array {
 *     An array of AVIF image information.
 *
 * @type int|false $width        Image width on success, false on failure.
 * @type int|false $height       Image height on success, false on failure.
 * @type int|false $bit_depth    Image bit depth on success, false on failure.
 * @type int|false $num_channels Image number of channels on success, false on failure.
 * }
 */
    public function wpGetAvifInfo(string $filename): array;
}
