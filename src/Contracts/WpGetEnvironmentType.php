<?php

namespace WpService\Contracts;

interface WpGetEnvironmentType
{
    /**
 * Retrieves the current environment type.
 *
 * The type can be set via the `WP_ENVIRONMENT_TYPE` global system variable,
 * or a constant of the same name.
 *
 * Possible values are 'local', 'development', 'staging', and 'production'.
 * If not set, the type defaults to 'production'.
 *
 * @since 5.5.0
 * @since 5.5.1 Added the 'local' type.
 * @since 5.5.1 Removed the ability to alter the list of types.
 *
 * @return string The current environment type.
 */
    public function wpGetEnvironmentType(): string;
}
