<?php

namespace WpService\Contracts;

interface WpAjaxAddTag
{
    /**
 * Handles adding a tag via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxAddTag(): void;
}
