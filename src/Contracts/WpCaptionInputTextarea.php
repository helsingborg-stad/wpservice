<?php

namespace WpService\Contracts;

interface WpCaptionInputTextarea
{
    /**
     * Outputs a textarea element for inputting an attachment caption.
     *
     * @since 3.4.0
     *
     * @param \WP_Post $editPost Attachment WP_Post object.
     * @return string HTML markup for the textarea element.
     */
    public function wpCaptionInputTextarea(\WP_Post $editPost): string;
}
