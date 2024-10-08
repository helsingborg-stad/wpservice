<?php

namespace WpService\Contracts;

interface GetInlineData
{
    /**
     * Adds hidden fields with the data for use in the inline editor for posts and pages.
     *
     * @since 2.7.0
     *
     * @param \WP_Post $post Post object.
     */
    public function getInlineData(\WP_Post $post): void;
}
