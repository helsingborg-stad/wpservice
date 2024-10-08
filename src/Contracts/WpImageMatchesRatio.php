<?php

namespace WpService\Contracts;

interface WpImageMatchesRatio
{
    /**
     * Helper function to test if aspect ratios for two images match.
     *
     * @since 4.6.0
     *
     * @param int $sourceWidth  Width of the first image in pixels.
     * @param int $sourceHeight Height of the first image in pixels.
     * @param int $targetWidth  Width of the second image in pixels.
     * @param int $targetHeight Height of the second image in pixels.
     * @return bool True if aspect ratios match within 1px. False if not.
     */
    public function wpImageMatchesRatio(int $sourceWidth, int $sourceHeight, int $targetWidth, int $targetHeight): bool;
}
