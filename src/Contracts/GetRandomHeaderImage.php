<?php

namespace WpService\Contracts;

interface GetRandomHeaderImage
{
    /**
 * Gets random header image URL from registered images in theme.
 *
 * @since 3.2.0
 *
 * @return string Path to header image.
 */
    public function getRandomHeaderImage(): string;
}
