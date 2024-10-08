<?php

namespace WpService\Contracts;

interface WpAjaxEditComment
{
    /**
     * Handles editing a comment via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxEditComment(): void;
}
