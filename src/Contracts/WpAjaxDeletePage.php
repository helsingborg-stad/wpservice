<?php

namespace WpService\Contracts;

interface WpAjaxDeletePage
{
    /**
 * Handles deleting a page via AJAX.
 *
 * @since 3.1.0
 *
 * @param string $action Action to perform.
 */
    public function wpAjaxDeletePage(string $action): void;
}
