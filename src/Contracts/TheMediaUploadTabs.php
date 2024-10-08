<?php

namespace WpService\Contracts;

interface TheMediaUploadTabs
{
    /**
 * Outputs the legacy media upload tabs UI.
 *
 * @since 2.5.0
 *
 * @global string $redir_tab
 */
    public function theMediaUploadTabs(): void;
}
