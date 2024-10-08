<?php

namespace WpService\Contracts;

interface WpAjaxAddLinkCategory
{
    /**
 * Handles adding a link category via AJAX.
 *
 * @since 3.1.0
 *
 * @param string $action Action to perform.
 */
    public function wpAjaxAddLinkCategory(string $action): void;
}
