<?php

namespace WpService\Contracts;

interface RestGetAvatarSizes
{
/**
 * Retrieves the pixel sizes for avatars.
 *
 * @since 4.7.0
 *
 * @return int[] List of pixel sizes for avatars. Default `[ 24, 48, 96 ]`.
 */
    public function restGetAvatarSizes(): array;
}
