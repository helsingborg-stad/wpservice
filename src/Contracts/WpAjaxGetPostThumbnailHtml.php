<?php

namespace WpService\Contracts;

interface WpAjaxGetPostThumbnailHtml
{
    /**
 * Handles retrieving HTML for the featured image via AJAX.
 *
 * @since 4.6.0
 */
    public function wpAjaxGetPostThumbnailHtml(): void;
}
