<?php

namespace WpService\Contracts;

interface PostSlugMetaBox
{
    /**
 * Displays slug form fields.
 *
 * @since 2.6.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postSlugMetaBox(\WP_Post $post): void;
}
