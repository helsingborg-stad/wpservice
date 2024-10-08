<?php

namespace WpService\Contracts;

interface WpAjaxDimComment
{
    /**
     * Handles dimming a comment via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxDimComment(): void;
}
