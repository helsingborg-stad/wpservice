<?php

namespace WpService\Contracts;

interface PostTrackbackMetaBox
{
    /**
 * Displays trackback links form fields.
 *
 * @since 2.6.0
 *
 * @param \WP_Post $post Current post object.
 */
    public function postTrackbackMetaBox(\WP_Post $post): void;
}
