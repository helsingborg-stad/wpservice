<?php

namespace WpService\Contracts;

interface ImageAlignInputFields
{
    /**
 * Retrieves HTML for the image alignment radio buttons with the specified one checked.
 *
 * @since 2.7.0
 *
 * @param \WP_Post $post
 * @param string $checked
 * @return string
 */
    public function imageAlignInputFields(\WP_Post $post, string $checked): string;
}
