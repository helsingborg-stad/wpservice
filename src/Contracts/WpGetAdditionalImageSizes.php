<?php

namespace WpService\Contracts;

interface WpGetAdditionalImageSizes
{
    /**
     * Retrieves additional image sizes.
     *
     * @since 4.7.0
     *
     * @global array $_wp_additional_image_sizes
     *
     * @return array Additional images size data.
     */
    public function wpGetAdditionalImageSizes(): array;
}
