<?php

namespace WpService\Contracts;

interface WpExpandDimensions
{
/**
 * Based on a supplied width/height example, returns the biggest possible dimensions based on the max width/height.
 *
 * @since 2.9.0
 *
 * @see wp_constrain_dimensions()
 *
 * @param int $exampleWidth  The width of an example embed.
 * @param int $exampleHeight The height of an example embed.
 * @param int $maxWidth      The maximum allowed width.
 * @param int $maxHeight     The maximum allowed height.
 * @return int[] {
 *     An array of maximum width and height values.
 *
 * @type int $0 The maximum width in pixels.
 * @type int $1 The maximum height in pixels.
 * }
 */
    public function wpExpandDimensions(int $exampleWidth, int $exampleHeight, int $maxWidth, int $maxHeight): array;
}
