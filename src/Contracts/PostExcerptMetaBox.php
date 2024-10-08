<?php

namespace WpService\Contracts;

interface PostExcerptMetaBox
{
    /**
     * Displays post excerpt form fields.
     *
     * @since 2.6.0
     *
     * @param \WP_Post $post Current post object.
     */
    public function postExcerptMetaBox(\WP_Post $post): void;
}
