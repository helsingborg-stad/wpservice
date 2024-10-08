<?php

namespace WpService\Contracts;

interface WpNavMenuSetup
{
    /**
 * Register nav menu meta boxes and advanced menu items.
 *
 * @since 3.0.0
 */
    public function wpNavMenuSetup(): void;
}
