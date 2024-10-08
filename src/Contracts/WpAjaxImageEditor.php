<?php

namespace WpService\Contracts;

interface WpAjaxImageEditor
{
    /**
     * Handles image editing via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxImageEditor(): void;
}
