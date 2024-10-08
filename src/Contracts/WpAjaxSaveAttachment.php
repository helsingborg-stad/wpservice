<?php

namespace WpService\Contracts;

interface WpAjaxSaveAttachment
{
    /**
 * Handles updating attachment attributes via AJAX.
 *
 * @since 3.5.0
 */
    public function wpAjaxSaveAttachment(): void;
}
