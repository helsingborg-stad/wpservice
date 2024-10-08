<?php

namespace WpService\Contracts;

interface WpAjaxRestNonce
{
    /**
 * Handles renewing the REST API nonce via AJAX.
 *
 * @since 5.3.0
 */
    public function wpAjaxRestNonce(): void;
}
