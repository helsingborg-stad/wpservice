<?php

namespace WpService\Contracts;

interface WpScriptModules
{
    /**
 * Retrieves the main WP_Script_Modules instance.
 *
 * This function provides access to the WP_Script_Modules instance, creating one
 * if it doesn't exist yet.
 *
 * @since 6.5.0
 *
 * @global WP_Script_Modules $wp_script_modules
 *
 * @return \WP_Script_Modules The main WP_Script_Modules instance.
 */
    public function wpScriptModules(): \WP_Script_Modules;
}
