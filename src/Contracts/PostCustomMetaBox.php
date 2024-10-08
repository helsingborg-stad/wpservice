<?php

namespace WpService\Contracts;

interface PostCustomMetaBox
{
    /**
 * Displays custom fields form fields.
 *
 * @since 2.6.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postCustomMetaBox(\WP_Post $post): void;
}
