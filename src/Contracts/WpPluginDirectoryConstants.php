<?php

namespace WpService\Contracts;

interface WpPluginDirectoryConstants
{
    /**
 * Defines plugin directory WordPress constants.
 *
 * Defines must-use plugin directory constants, which may be overridden in the sunrise.php drop-in.
 *
 * @since 3.0.0
 */
    public function wpPluginDirectoryConstants(): void;
}
