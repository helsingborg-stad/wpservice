<?php

namespace WpService\Contracts;

interface WpAjaxImgeditPreview
{
    /**
 * Handles image editor previews via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxImgeditPreview(): void;
}
