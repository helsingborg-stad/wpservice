<?php

namespace WpService\Contracts;

interface WpAjaxGetPermalink
{
    /**
 * Handles retrieving a permalink via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxGetPermalink(): void;
}
