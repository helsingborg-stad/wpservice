<?php

namespace WpService\Contracts;

interface GetBlockCorePostFeaturedImageOverlayElementMarkup
{
    /**
     * Generate markup for the HTML element that will be used for the overlay.
     *
     * @since 6.1.0
     *
     * @param array $attributes Block attributes.
     *
     * @return string HTML markup in string format.
     */
    public function getBlockCorePostFeaturedImageOverlayElementMarkup(array $attributes): string;
}
