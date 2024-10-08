<?php

namespace WpService\Contracts;

interface ImageLinkInputFields
{
    /**
 * Retrieves HTML for the Link URL buttons with the default link type as specified.
 *
 * @since 2.7.0
 *
 * @param \WP_Post $post
 * @param string $urlType
 * @return string
 */
    public function imageLinkInputFields(\WP_Post $post, string $urlType): string;
}
