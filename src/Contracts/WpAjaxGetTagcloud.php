<?php

namespace WpService\Contracts;

interface WpAjaxGetTagcloud
{
    /**
 * Handles getting a tagcloud via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxGetTagcloud(): void;
}
