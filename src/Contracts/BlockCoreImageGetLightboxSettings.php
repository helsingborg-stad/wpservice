<?php

namespace WpService\Contracts;

interface BlockCoreImageGetLightboxSettings
{
/**
 * Adds the lightboxEnabled flag to the block data.
 *
 * This is used to determine whether the lightbox should be rendered or not.
 *
 * @since 6.4.0
 *
 * @param array $block Block data.
 *
 * @return array Filtered block data.
 */
    public function blockCoreImageGetLightboxSettings(array $block): array;
}
