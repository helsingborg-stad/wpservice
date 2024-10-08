<?php

namespace WpService\Contracts;

interface WpAjaxCropImage
{
    /**
 * Handles cropping an image via AJAX.
 *
 * @since 4.3.0
 */
    public function wpAjaxCropImage(): void;
}
