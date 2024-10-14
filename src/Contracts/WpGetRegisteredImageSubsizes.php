<?php

namespace WpService\Contracts;

interface WpGetRegisteredImageSubsizes
{
/**
 * Returns a normalized list of all currently registered image sub-sizes.
 *
 * @since 5.3.0
 * @uses wp_get_additional_image_sizes()
 * @uses get_intermediate_image_sizes()
 *
 * @return array[] Associative array of arrays of image sub-size information,
 *                 keyed by image size name.
 */
    public function wpGetRegisteredImageSubsizes(): array;
}
