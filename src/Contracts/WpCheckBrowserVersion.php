<?php

namespace WpService\Contracts;

interface WpCheckBrowserVersion
{
/**
 * Checks if the user needs a browser update.
 *
 * @since 3.2.0
 *
 * @return array|false Array of browser data on success, false on failure.
 */
    public function wpCheckBrowserVersion(): array|false;
}
