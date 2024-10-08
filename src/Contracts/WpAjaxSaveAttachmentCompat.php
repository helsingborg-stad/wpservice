<?php

namespace WpService\Contracts;

interface WpAjaxSaveAttachmentCompat
{
    /**
 * Handles saving backward compatible attachment attributes via AJAX.
 *
 * @since 3.5.0
 */
    public function wpAjaxSaveAttachmentCompat(): void;
}
