<?php

namespace WpService\Contracts;

interface WpAjaxDeleteLink
{
/**
 * Handles deleting a link via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxDeleteLink(): void;
}
