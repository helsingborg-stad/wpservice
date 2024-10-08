<?php

namespace WpService\Contracts;

interface PageAttributesMetaBox
{
    /**
 * Displays page attributes form fields.
 *
 * @since 2.7.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function pageAttributesMetaBox(\WP_Post $post): void;
}
