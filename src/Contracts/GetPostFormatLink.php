<?php

namespace WpService\Contracts;

interface GetPostFormatLink
{
/**
 * Returns a link to a post format index.
 *
 * @since 3.1.0
 *
 * @param string $format The post format slug.
 * @return string|\WP_Error|false The post format term link.
 */
    public function getPostFormatLink(string $format): string|\WP_Error|false;
}
