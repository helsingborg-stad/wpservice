<?php

namespace WpService\Contracts;

interface GetOembedResponseDataRich
{
/**
 * Filters the oEmbed response data to return an iframe embed code.
 *
 * @since 4.4.0
 *
 * @param array $data   The response data.
 * @param \WP_Post $post   The post object.
 * @param int $width  The requested width.
 * @param int $height The calculated height.
 * @return array The modified response data.
 */
    public function getOembedResponseDataRich(array $data, \WP_Post $post, int $width, int $height): array;
}
