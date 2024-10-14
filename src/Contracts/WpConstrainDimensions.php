<?php

namespace WpService\Contracts;

interface WpConstrainDimensions
{
/**
 * Calculates the new dimensions for a down-sampled image.
 *
 * If either width or height are empty, no constraint is applied on
 * that dimension.
 *
 * @since 2.5.0
 *
 * @param int $currentWidth  Current width of the image.
 * @param int $currentHeight Current height of the image.
 * @param int $maxWidth      Optional. Max width in pixels to constrain to. Default 0.
 * @param int $maxHeight     Optional. Max height in pixels to constrain to. Default 0.
 * @return int[] {
 *     An array of width and height values.
 *
 * @type int $0 The width in pixels.
 * @type int $1 The height in pixels.
 * }
 */
    public function wpConstrainDimensions(int $currentWidth, int $currentHeight, int $maxWidth = 0, int $maxHeight = 0): array;
}
