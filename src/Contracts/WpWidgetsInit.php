<?php

namespace WpService\Contracts;

interface WpWidgetsInit
{
    /**
 * Registers all of the default WordPress widgets on startup.
 *
 * Calls {@see 'widgets_init'} action after all of the WordPress widgets have been registered.
 *
 * @since 2.2.0
 */
    public function wpWidgetsInit(): void;
}
