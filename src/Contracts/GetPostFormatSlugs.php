<?php

namespace WpService\Contracts;

interface GetPostFormatSlugs
{
/**
 * Retrieves the array of post format slugs.
 *
 * @since 3.1.0
 *
 * @return string[] The array of post format slugs as both keys and values.
 */
    public function getPostFormatSlugs(): array;
}
