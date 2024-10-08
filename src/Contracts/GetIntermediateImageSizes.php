<?php

namespace WpService\Contracts;

interface GetIntermediateImageSizes
{
    /**
     * Gets the available intermediate image size names.
     *
     * @since 3.0.0
     *
     * @return string[] An array of image size names.
     */
    public function getIntermediateImageSizes(): array;
}
