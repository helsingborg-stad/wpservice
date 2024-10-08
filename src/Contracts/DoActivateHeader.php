<?php

namespace WpService\Contracts;

interface DoActivateHeader
{
    /**
 * Adds an action hook specific to this page.
 *
 * Fires on {@see 'wp_head'}.
 *
 * @since MU (3.0.0)
 */
    public function doActivateHeader(): void;
}
