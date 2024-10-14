<?php

namespace WpService\Contracts;

interface EditFormImageEditor
{
/**
 * Displays the image and editor in the post editor
 *
 * @since 3.5.0
 *
 * @param \WP_Post $post A post object.
 */
    public function editFormImageEditor(\WP_Post $post): void;
}
