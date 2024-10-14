<?php

namespace WpService\Contracts;

interface WpAjaxDeleteMeta
{
/**
 * Handles deleting meta via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxDeleteMeta(): void;
}
