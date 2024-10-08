<?php

namespace WpService\Contracts;

interface GetHeaderImageTag
{
    /**
 * Creates image tag markup for a custom header image.
 *
 * @since 4.4.0
 *
 * @param array $attr Optional. Additional attributes for the image tag. Can be used
 *                              to override the default attributes. Default empty.
 * @return string HTML image element markup or empty string on failure.
 */
    public function getHeaderImageTag(array $attr): string;
}
