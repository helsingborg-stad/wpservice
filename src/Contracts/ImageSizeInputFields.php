<?php

namespace WpService\Contracts;

interface ImageSizeInputFields
{
/**
 * Retrieves HTML for the size radio buttons with the specified one checked.
 *
 * @since 2.7.0
 *
 * @param \WP_Post $post
 * @param bool|string $check
 * @return array
 */
    public function imageSizeInputFields(\WP_Post $post, bool|string $check = ''): array;
}
