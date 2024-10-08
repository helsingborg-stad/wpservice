<?php

namespace WpService\Contracts;

interface WpAjaxSetPostThumbnail
{
    /**
     * Handles setting the featured image via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxSetPostThumbnail(): void;
}
