<?php

namespace WpService\Contracts;

interface WpAjaxInlineSaveTax
{
    /**
 * Handles Quick Edit saving for a term via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxInlineSaveTax(): void;
}
